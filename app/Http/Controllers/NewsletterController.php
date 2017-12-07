<?php

namespace AVD\Http\Controllers;


use AVD\Interfaces\NewsletterInterface as InterModel;
use AVD\Interfaces\UserInterface as InterUser;
use AVD\Events\NewsletterCreatedEvent;
use AVD\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class NewsletterController extends Controller
{
    protected $interModel;
    protected $interUser;
    protected $messages;


    public function __construct(InterModel $interModel, InterUser $interUser)
    {
        $this->interModel   = $interModel;
        $this->interUser    = $interUser;
        $this->messages     = array(
            'email.required'  => 'O email é obrigatório.',
            'email.email'  => 'Digite um email valído.',
            'email.unique' => 'Este email já esta registrado.'
        );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()){

            $this->interModel->rules($request, $this->messages);

            $dataForm = $request->all();

            $user = $this->interUser->setEmail(strtolower($dataForm['email']));

            if ($user) {
                $input = [
                    "newsletter" => 1
                ];

                $this->interUser->update($input, $user->id);

            } else {

                $location = \Location::get($request->ip());

                $dataForm['city']      = $location->cityName;
                $dataForm['state']     = $location->regionName;
                $dataForm['zip_code']  = $location->zipCode;
                $dataForm['latitude']  = $location->latitude;
                $dataForm['longitude'] = $location->longitude;
                $dataForm['email']     = strtolower($dataForm['email']);
                $dataForm['token']     = str_random(40);

                event(new NewsletterCreatedEvent($dataForm));

            }

            return response()->json(['success' => 'Seu email foi cadastrado.']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function token($email, $token)
    {
        $data = $this->interModel->confirmation($email, $token);
        if ($data) {
            $input = ["confirmed" => 1, "token" => Null];
            $update = $this->interModel->update($input, $data->id);

            Session::flash("success", "Você se inscreveu com sucesso! Agora você vai ficar por dentro de todas as novidades e promoções.");
            $title = 'Você se inscreveu com sucesso em nossa newsletter!';
        }

        return view('messages.message-1', compact('title'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}