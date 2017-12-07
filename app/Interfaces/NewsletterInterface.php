<?php

namespace AVD\Interfaces;

interface NewsletterInterface
{
    /**
     * Interface model Newsletter
     *
     * @return \AVD\Repositories\NewsletterRepository
     */
    public function setEmail($email);
    public function create($input);
    public function update($input, $id);
    public function confirmation($email,$token);
}