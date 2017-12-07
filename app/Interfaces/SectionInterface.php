<?php

namespace AVD\Interfaces;

interface SectionInterface
{
    /**
     * Interface model Section
     *
     * @return \AVD\Repositories\SectionRepository
     */
    public function getAll();
    public function get($slug);
    public function setId($id);
}