<?php

namespace AVD\Interfaces;

interface ImageColorInterface
{
    /**
     * Interface model ImageColor
     *
     * @return \AVD\Repositories\ImageColorRepository
     */
    public function setId($id);
    public function get($slug);

}