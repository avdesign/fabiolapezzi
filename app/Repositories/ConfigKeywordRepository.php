<?php

namespace AVD\Repositories;


use AVD\Models\ConfigKeyword as Model;
use AVD\Interfaces\ConfigKeywordInterface;


class ConfigKeywordRepository implements ConfigKeywordInterface
{

    public $model;

    /**
     * Create construct.
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    /**
     * Random Model
     *
     * @return array
     */
    public function random()
    {
        return $this->model->inRandomOrder()->firstOrFail();
    }



}