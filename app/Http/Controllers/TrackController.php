<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;

use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Http\Controllers\Controller;

use Session;



class TrackController extends Controller
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

        return view('helps.track-1', compact('configKeyword'));
    }


    public function info(Request $request)
    {
        Session::flash('success', 'Aguarde em Construção');

        $configKeyword  = $this->configKeyword->random();

        return view('helps.track-1', compact('configKeyword'));
    }
}
