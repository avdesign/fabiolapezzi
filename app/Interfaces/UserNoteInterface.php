<?php

namespace AVD\Interfaces;

interface UserNoteInterface
{
    /**
     * Interface model UserNote
     *
     * @return \AVD\Repositories\UserNoteRepository
     */
    public function create($input);

}