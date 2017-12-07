<?php

namespace AVD\Repositories;


use AVD\Models\Wishlist as Model;
use AVD\Interfaces\WishlistInterface;

class WishlistRepository implements WishlistInterface
{

    public $model;

    /**
     * Create construct.
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model   = $model;

    }

    /**
     * Create
     *
     * @param  array $input
     * @return boolean true or false
     */
    public function create($input)
    {
        return  $this->model->create($input);
    }

    public function update($input, $id)
    {
       $data   = $this->model->find($id);
       return $data->update($input);

    }


    /**
     * @param $user_id
     * @return mixed
     */
    public function getList($user_id)
    {
        return  $this->model->where('user_id',$user_id)->orderBy('id','desc')->get();
    }

    /**
     * @param $key
     * @return mixed
     */
    public function setKey($key)
    {
        return  $this->model->where('key',$key)->first();
    }


    /**
     * @param $user_id
     * @param $grid
     * @param $color_id
     * @return mixed
     */
    public function setProduct($user_id, $grid, $color_id)
    {
        return  $this->model->where([
            'user_id' => $user_id,
            'grid' => $grid,
            'image_color_id' => $color_id,
        ])->first();
    }


    /**
     * @param $id
     */
    public function delete($id)
    {
        $data = $this->model->find($id);
        return $data->delete();

    }


}