<?php

namespace AVD\Repositories;


use AVD\Models\Newsletter as Model;
use AVD\Interfaces\NewsletterInterface;

use Illuminate\Foundation\Validation\ValidatesRequests;

class NewsletterRepository implements NewsletterInterface
{
    use ValidatesRequests;

    public $model;

    /**
     * Create construct.
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * ValidatesRequests
     *
     * @param  array $input
     * @param  array $messages
     * @return array
     */
    public function rules($input, $messages, $id='')
    {
        $this->validate($input, $this->model->rules($id), $messages);
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }


    /**
     * Adicionar
     *
     * @param  array $input
     * @return array
     */
    public function create($input)
    {
        return $this->model->create($input);
    }

    /**
     * Active status
     *
     * @param  string  $email
     * @param  string  $token
     * @return array
     */
    public function confirmation($email, $token)
    {
        return $this->model->where(['email'=> $email, 'token' => $token])->first();
    }


    /**
     * Alterar
     *
     * @param  int  $id
     * @param  array $input
     * @return boolean true or false
     */
    public function update($input, $id)
    {
        $data = $this->model->find($id);
        return $data->update($input);
    }
}