<?php

namespace AVD\Interfaces;

interface UserInterface
{
    /**
     * Interface model User
     *
     * @return \AVD\Repositories\UserRepository
     */
    public function create($input);
    public function setId($id);
    public function setEmail($email);
    public function update($input, $id);
}