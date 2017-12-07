<?php

namespace AVD\Repositories;


use AVD\Models\UserAddress as Model;
use AVD\Interfaces\UserAddressInterface;


class UserAddressRepository implements UserAddressInterface
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
     * @param $input
     * @param $id
     * @return mixed
     */
    public function update($input, $id)
    {
        $data  = $this->model->find($id);
        return $data->update($input);
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function setDelivery($user_id)
    {
        return $this->model->where(['delivery' => 1, 'user_id' => $user_id])->first();
    }

}