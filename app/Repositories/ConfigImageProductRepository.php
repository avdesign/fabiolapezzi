<?php

namespace AVD\Repositories;


use AVD\Models\ConfigImageProduct as Model;
use AVD\Interfaces\ConfigImageProductInterface;

class ConfigImageProductRepository implements ConfigImageProductInterface
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
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->get();
    }



}