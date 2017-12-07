<?php

namespace AVD\Http\Controllers;

use Vinkla\Instagram\Instagram;


use AVD\Http\Controllers\Controller;
use AVD\Interfaces\ConfigKeywordInterface as ConfigKeyword;

class FaqsController extends Controller
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



}
