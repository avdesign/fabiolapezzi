<?php

namespace AVD\Http\Controllers;

use AVD\Http\Controllers\Controller;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;

class ReturnsController extends Controller
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


    public function index()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('helps.returns-1', compact('configKeyword'));
    }
}
