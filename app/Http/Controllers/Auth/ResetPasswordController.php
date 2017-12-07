<?php

namespace AVD\Http\Controllers\Auth;

use AVD\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/atacado';
    protected $configKeyword;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ConfigKeyword $configKeyword)
    {
        $this->middleware('guest');

        $this->configKeyword = $configKeyword;
    }


}
