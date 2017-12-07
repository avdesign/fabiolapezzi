<?php

namespace AVD\Interfaces;

interface UserAddressInterface
{
    /**
     * Interface model UserAddress
     *
     * @return \AVD\Repositories\UserAddressRepository
     */
    public function create($input);
    public function update($input, $id);
    public function setDelivery($user_id);

}