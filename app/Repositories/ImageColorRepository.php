<?php

namespace AVD\Repositories;


use AVD\Models\ImageColor as Model;
use AVD\Interfaces\ImageColorInterface;

class ImageColorRepository implements ImageColorInterface
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
     */
    public function get($slug)
    {
        return $this->model->where(['active' => 1, 'slug' => $slug])->first();
    }

}