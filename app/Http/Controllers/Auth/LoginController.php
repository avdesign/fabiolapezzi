<?php

namespace AVD\Http\Controllers\Auth;

use AVD\Http\Controllers\Controller;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/atacado/minha-conta';
    protected $configKeyword;
    protected $messsages;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ConfigKeyword $configKeyword)
    {
        $this->middleware('guest')->except('logout');

        $this->configKeyword = $configKeyword;
        $this->messsages = array(
            'email.required' =>'O Email é obrigatório.',
            'email.email'=> 'Digite um email valído.',
            'password.required' => 'A senha é obrigatória'
        );
    }


    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('auth.login', compact('configKeyword'));
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {

        return [
            'email' => $request->{$this->username()},
            'password' => $request->password,
            'status' => 1
        ];

    }
}
