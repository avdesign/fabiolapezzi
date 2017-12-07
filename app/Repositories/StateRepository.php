<?php

namespace AVD\Repositories;


use AVD\Models\State as Model;
use AVD\Interfaces\StateInterface;

use Illuminate\Foundation\Validation\ValidatesRequests;

class StateRepository implements StateInterface
{
    use ValidatesRequests;

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

    public function pluck($name, $id)
    {
        return $this->model->pluck($name,$id);
    }

}