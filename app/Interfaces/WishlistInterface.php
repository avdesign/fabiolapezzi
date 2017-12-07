<?php

namespace AVD\Interfaces;

interface WishlistInterface
{
    /**
     * Interface model Wishlist
     *
     * @return \AVD\Repositories\WishlistRepository
     */
    public function create($input);
    public function update($input, $id);
    public function delete($id);
    public function getList($user_id);
    public function setKey($key);
    public function setProduct($user_id, $grid, $color_id);

}