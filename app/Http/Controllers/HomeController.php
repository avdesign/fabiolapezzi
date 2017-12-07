<?php

namespace AVD\Http\Controllers;

use Vinkla\Instagram\Instagram;

use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Http\Controllers\Controller;



class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links          = new Instagram();

        //$instagram      = $links->get('fabiolapezzi');
        $instagram = [];

        $configKeyword  = $this->configKeyword->random();

        return view('home.home-1', compact(
            'instagram',
            'configKeyword'
        ));

    }

    public function location()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('locations.location-1', compact('configKeyword'));
    }

    public function faqs()
    {
        $links          = new Instagram();
        //$instagram      = $links->get('fabiolapezzi');
        $instagram = [];

        $configKeyword  = $this->configKeyword->random();

        return view('helps.faq-1', compact('configKeyword','instagram'));
    }

    public function privacy()
    {
        $configKeyword  = $this->configKeyword->random();

        return view('helps.privacy-policy-1', compact(
            'instagram',
            'configKeyword'
        ));
    }


    public function modelo()
    {

        $configKeyword  = $this->configKeyword->random();

        return view('layouts.modelo', compact(
            'instagram',
            'configKeyword'
        ));
    }


    public function erros()
    {

        $configKeyword  = $this->configKeyword->random();

        return view('errors.404', compact(
            'instagram',
            'configKeyword'
        ));
    }

}
