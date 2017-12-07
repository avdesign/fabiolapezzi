<?php

namespace AVD\Http\Controllers;

use AVD\Interfaces\ConfigSubjectContactInterface as ConfigSubject;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Interfaces\ContactInterface as InterModel;
use AVD\Interfaces\UserInterface as InterUser;
use AVD\Events\NewsletterCreatedEvent;
use AVD\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    protected $configSubject;
    protected $configKeyword;
    protected $interModel;
    protected $interUser;
    protected $messages;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ConfigKeyword $configKeyword,
        ConfigSubject $configSubject,
        InterModel $interModel,
        InterUser $interUser)
    {


        $this->interModel    = $interModel;
        $this->interUser     = $interUser;
        $this->configSubject = $configSubject;
        $this->configKeyword = $configKeyword;
        $this->messages     = array(
            'subject_id.required'  => 'O assunto é obrigatório.',
            'subject_id.numeric'  => 'O assunto é obrigatório.',
            'name.required'  => 'O nome é obrigatório.',
            'email.required'  => 'O email é obrigatório.',
            'email.email'  => 'Digite um email valído.',
            'cell.required'  => 'O celular é obrigatório.',
            'cell.celular_com_ddd' => "Digite o telefone neste formato (99)99999-9999",
            'message.required'  => 'A mensagem é obrigatória.',
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configKeyword  = $this->configKeyword->random();
        $subjects       = $this->configSubject->pluck();

        return view('contacts.contact-1', compact('configKeyword','subjects'));
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

            $dataForm              = array_except($request->all(), '_token');
            $subject               = $this->configSubject->setId($dataForm['subject_id']);
            $dataForm['subject']   = $subject->label;

            $location              = \Location::get($request->ip());
            $dataForm['ip']        = $request->ip();
            $dataForm['city']      = $location->cityName;
            $dataForm['state']     = $location->regionName;
            $dataForm['zip_code']  = $location->zipCode;
            $dataForm['latitude']  = $location->latitude;
            $dataForm['longitude'] = $location->longitude;

            $user = $this->interUser->setEmail(strtolower($dataForm['email']));
            if ($user) {

                if (isset($dataForm['newsletter'])){
                    $input = [
                        "newsletter" => 1
                    ];
                    $this->interUser->update($input, $user->id);
                }

                $dataForm['client']    = 1;
                $dataForm['user_id']   = $user->id;

            } else {

                $dataForm['contact'] = true;
                $dataForm['token']   = str_random(40);
                event(new NewsletterCreatedEvent($dataForm));

            }
            $data = $this->interModel->create($dataForm);
            if ($data) {
                if (Auth::check()) {
                    return response()->json(
                        ["success" => 'Sua mensagem foi enviada com sucesso!<br>
                            Todos as mensagens, ao serem respondidas vão para o seu painel administratvo "Mensagens", <br>
                            Status "Em Andamento". Isso significa que já existe uma equipe verificando sua mensagem.'
                        ]);
                } else {
                    return response()->json(
                        ["success" => "Sua mensagem foi enviada com sucesso!<br>
                            Caso a mensagem de retorno não chegue em  15(Segundos) na sua caixa postal, verifique na caixa de spam e adicione o nosso email em sua lista de contatos.",
                            "redirect" => route('home')
                        ]);
                }

            } else {
                return response()->json(['error' => "Ocorreu um erro ao tentar enviar sua mensagem. Por favor, tente novamente mais tarde"]);
            }
        }
    }


}
