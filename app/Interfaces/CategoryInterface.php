<?php

namespace AVD\Interfaces;

interface CategoryInterface
{
    /**
     * Interface model Category
     *
     * @return \AVD\Repositories\CategoryRepository
     */
    public function setId($id);
    public function get($slug);

}