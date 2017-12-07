<?php

namespace AVD\Repositories;


use AVD\Models\ConfigSubjectContact as Model;
use AVD\Interfaces\ConfigSubjectContactInterface;


class ConfigSubjectContactRepository implements ConfigSubjectContactInterface
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
     * List
     *
     * @return array $id $subject
     */
    public function pluck()
    {
        return $this->model->pluck('id', 'label');
    }

    /**
     * Set Id
     *
     * @param $id
     */
    public function setId($id)
    {
        return $this->model->find($id);
    }

}