<?php

namespace AVD\Repositories;


use AVD\Models\Category as Model;
use AVD\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface
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
     * @param $slug
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->where('status', 'Ativo')->get();
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
        return $this->model->where(['status' => 'Ativo', 'slug' => $slug])->first();
    }



}