<?php

namespace AVD\Repositories;


use AVD\Models\Product as Model;
use AVD\Interfaces\ProductInterface;

class ProductRepository implements ProductInterface
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

    /**
     * @param $slug
     * @return mixed
     */
    public function get($slug)
    {
        return $this->model->where(['active' => 1, 'slug' => $slug])->first();
    }



}