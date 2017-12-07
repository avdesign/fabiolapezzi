<?php

namespace AVD\Repositories;


use AVD\Models\Section as Model;
use AVD\Interfaces\SectionInterface;

class SectionRepository implements SectionInterface
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
        return $this->model->where('status', 'Ativo')->get();
    }



    /**
     * @param $slug
     * @return mixed
     */
    public function get($slug)
    {
        return $this->model->where(['status' => 'Ativo', 'slug' => $slug])->first();
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