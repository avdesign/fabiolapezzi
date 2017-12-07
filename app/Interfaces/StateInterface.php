<?php

namespace AVD\Interfaces;

interface StateInterface
{
    /**
     * Interface model State
     *
     * @return \AVD\Repositories\StateRepository
     */
    public function pluck($name, $id);

}