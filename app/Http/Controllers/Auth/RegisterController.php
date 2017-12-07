<?php

namespace AVD\Http\Controllers\Auth;


use AVD\Events\UserRegisterConfirmedEvent;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Interfaces\UserInterface as InterModel;
use AVD\Interfaces\StateInterface as InterStates;


use AVD\Events\UserNoteCreatedEvent;
use AVD\Events\UserAddressCreatedEvent;

use AVD\Http\Controllers\Controller;
use AVD\Http\Requests\RegisterUserRequest as UserRequest;


use Illuminate\Foundation\Auth\RegistersUsers;

use Session;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';
    protected $interStates;
    protected $configKeyword;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        InterModel $interModel,
        InterStates $interStates,
        ConfigKeyword $configKeyword)
    {
        $this->middleware('guest');

        $this->interModel    = $interModel;
        $this->interStates   = $interStates;
        $this->configKeyword = $configKeyword;

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $configKeyword  = $this->configKeyword->random();
        $states         = $this->interStates->pluck('name', 'uf');

        return view('auth.register', compact('configKeyword','states'));
    }


    /**
     * Axax: load profile.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        return view("profiles.profile-{$id}");
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \AVD\Models\User
     */
    protected function register(UserRequest $request)
    {
        $dataForm  = $request->all();
        $address   = $dataForm['address'];
        $user      = $dataForm['user'];
        $ip        = $request->ip();

        $user['email']     = strtolower($user['email']);
        $user['token']     = str_random(40);
        $user['ip']        = $ip;
        $user['password']  = bcrypt($user['password']);

        if (isset($user['newsletter'])){
            $user['newsletter'] = 1;
        }

        $create = $this->interModel->create($user);
        if ($create) {

            $address['user_id']  = $create->id;
            $address['delivery'] = 1;

            event(new UserAddressCreatedEvent($address));

            $location =  \Location::get($ip);
            $desc     =  "Local: {$location->cityName}, ";
            $desc    .=  "Estado:{$location->regionName}, ";
            $desc    .=  "CEP:{$location->zipCode}, ";
            $desc    .=  "IP:{$ip}, ";
            $desc    .=  "Latitude:{$location->latitude}, ";
            $desc    .=  "Longitude:{$location->longitude}";


            $note = [
                'user_id' => $create->id,
                'Admin' => 'Cliente',
                'label' => 'Cadastro',
                'description' => $desc
            ];

            event(new UserNoteCreatedEvent($note));


            if ($request->ajax()){

                return response()->json(["success" => 'Foi enviado um código de validação para '.$create->email.'. 
                    Abra este email para concluir o registro.<br/>
                    Se você não receber este e-mail em sua caixa de entrada dentro de 15 minutos,
                    procure na pasta de lixo eletrônico. Se ele estiver ali, marque-o como "Não é lixo eletrônico".']);

            } else {
                $request->session()->flash('success', 'Foi enviado um código de validação para '.$create->email.'. 
                    Se você não receber este e-mail em sua caixa de entrada dentro de 15 minutos,
                    procure na pasta de lixo eletrônico. Se ele estiver ali, marque-o como "Não é lixo eletrônico".');

                return redirect(route('messages'));
            }
        } else {

            if ($request->ajax()){
                return response()->json(["success" => "Desculpe! Infelizmente houve um erro não identificado. Tente novamente mais tarde."]);
            } else {
                $request->session()->flash('error', 'Desculpe! Infelizmente houve um erro não identificado. Tente novamente mais tarde');
                return redirect(route('register'));
            }
        }
    }




    protected function verifyToken($email, $token)
    {
        $user = $this->interModel->setEmail($email);
        if ($user) {
            if ($user->token == $token) {
                $update = $user->update(['status' => 1, 'token' => NULL]);
                if ($update) {

                    event(new UserRegisterConfirmedEvent($user));

                    return redirect(route('login'))->with('success', 'A sua conta foi confirmada com sucesso. Entre com seu email e senha abaixo:');

                } else {

                    return redirect(route('register'))->with('error', 'Desculpe, houve um erro no sistema tente mais tarde.');
                }
            } elseif ($user->token == NULL && $user->status == 1) {

                return redirect(route('login'))->with('success', 'Sua conta já se encontra ativa. Faça o login abaixo:');

            } elseif ($user->token == NULL && $user->status == 0) {

                return redirect(route('contact'))->with('error', 'A sua conta está inativa, entre em contato com o administrador. Para reativala entre em contato com nossa equipe');
            }

        }

        return redirect(route('register'))->with('error', 'Não existe nenhum registro com essas credenciais, Para ter acesso a área do revendedor preencha os dados abaixo.');


    }




}