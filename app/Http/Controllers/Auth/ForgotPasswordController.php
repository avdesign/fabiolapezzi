<?php

namespace AVD\Http\Controllers\Auth;

use AVD\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

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


    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        $configKeyword = $this->configKeyword->random();
        return view('auth.passwords.email', compact('configKeyword'));
    }
}
