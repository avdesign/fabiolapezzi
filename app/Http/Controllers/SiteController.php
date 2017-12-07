<?php

namespace AVD\Http\Controllers;

use Vinkla\Instagram\Instagram;

use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;
use AVD\Interfaces\SectionInterface as InterSection;
use AVD\Interfaces\ConfigSiteInterface as ConfigSite;
use AVD\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Session;




class SiteController extends Controller
{


    /**
     * SiteController constructor.
     * @param ConfigKeyword $configKeyword
     * @param InterSection $interSection
     * @param ConfigSite $configSite
     */

    public function __construct(
        ConfigKeyword $configKeyword,
        InterSection $interSection,
        ConfigSite $configSite)
    {
        $this->middleware('auth');

        $this->configKeyword = $configKeyword;
        $this->interSection  = $interSection;
        $this->configSite    = $configSite;
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

        $configKeyword  = $this->configKeyword->random();
        $configSite     = $this->configSite->setId(1);
        $sections       = $this->interSection->getAll();

        return view('home.home-2', compact(
            'configKeyword',
            'configSite',
            'instagram',
            'sections'
        ));
    }








}
