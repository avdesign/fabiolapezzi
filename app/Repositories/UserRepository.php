<?php

namespace AVD\Repositories;


use AVD\Models\User as Model;
use AVD\Interfaces\UserInterface;


class UserRepository implements UserInterface
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
     * Create
     *
     * @param  array $input
     * @return mixed
     */
    public function create($input)
    {
        return $this->model->create($input);
    }

    /**
     * Instance ID
     *
     * @param $id
     * @return array
     */
    public function setId($id)
    {
        return $this->model->find($id);
    }

    /**
     * Instance mail
     *
     * @param $email
     * @return array
     */
    public function setEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }

    /**
     * Update User
     *
     * @param $input
     * @param $id
     * @return boolean true or false
     */
    public function update($input, $id)
    {
        $data  = $this->model->find($id);
        return $data->update($input);

    }





}