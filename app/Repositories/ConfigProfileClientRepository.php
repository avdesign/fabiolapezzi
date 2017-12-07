<?php

namespace AVD\Repositories;


use AVD\Models\ConfigProfileClient as Model;
use AVD\Interfaces\ConfigProfileClientInterface;


class ConfigProfileClientRepository implements ConfigProfileClientInterface
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
    public function get()
    {
        return $this->model->where('status', 'Ativo')->orderBy('order')->get();
    }



}