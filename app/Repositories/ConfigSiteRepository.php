<?php

namespace AVD\Repositories;


use AVD\Models\ConfigSite as Model;
use AVD\Interfaces\ConfigSiteInterface;

class ConfigSiteRepository implements ConfigSiteInterface
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
     * Istance
     *
     * @param  int Id
     * @return mixed
     */
    public function setId($id)
    {
        return $this->model->find($id);
    }



}