<?php

namespace AVD\Interfaces;

interface ContactInterface
{
    /**
     * Interface model Contact
     *
     * @return \AVD\Repositories\ContactRepository
     */
    public function create($input);
    public function getEmail($email);

}