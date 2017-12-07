<?php

namespace AVD\Http\Controllers;

use AVD\Http\Controllers\Controller;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;


class PrivacyPolicyController extends Controller
{
    protected $configKeyword;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ConfigKeyword $configKeyword)
    {
        $this->middleware('auth');

        $this->configKeyword = $configKeyword;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('helps.privacy-policy-1', compact(
            'instagram',
            'configKeyword'
        ));
    }
}
