<?php

namespace AVD\Interfaces;

interface ProductInterface
{
    /**
     * Interface model Product
     *
     * @return \AVD\Repositories\ProductRepository
     */
    public function setId($id);
    public function get($slug);

}