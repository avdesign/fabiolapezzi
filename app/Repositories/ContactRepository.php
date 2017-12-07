<?php

namespace AVD\Repositories;


use AVD\Models\Contact as Model;
use AVD\Interfaces\ContactInterface;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class ContactRepository implements ContactInterface
{
    use ValidatesRequests;

    public $model;
    public $request;

    /**
     * Create construct.
     *
     * @return void
     */
    public function __construct(Request $request, Model $model)
    {
        $this->model   = $model;
        $this->request = $request;

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
     * @param \Illuminate\Http\Request $request
     * @param $email
     * @return array
     */
    public function getEmail($email)
    {
        $columns = array(
            0 => 'id',
            1 => 'subject',
            2 => 'message',
            3 => 'admin',
            4 => 'return',
            5 => 'updated_at',
            6 => 'created_at',
            7 => 'status'

        );

        $totalData = $this->model->where('email', $email)->count();

        $totalFiltered = $totalData;

        $limit = $this->request->input('length');
        $start = $this->request->input('start');
        $order = $columns[$this->request->input('order.0.column')];
        $dir   = $this->request->input('order.0.dir');

        if (empty($this->request->input('search.value'))) {
            $query = $this->model->where('email', $email)
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
        } else {
            $search = $this->request->input('search.value');

            $query =  $this->model->where('email', $email)
                ->offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = $this->model->where('email', $email)
                ->count();
        }

        $data  = array();
        if(!empty($query))
        {
            foreach ($query as $val){

                ($val->status == 1 ? $status = '' : $status = 'Em Andamento<br/><br/>');
                $created_at    = date('d/m/Y h:i',strtotime($val->created_at));
                $updated_at    = date('d/m/Y h:i',strtotime($val->updated_at));
                $message       = $created_at.'<br/><br/>'.$val->message;

                if ($val->status > 0) {
                    $return   = $val->admin.'<br/>'.$updated_at.'<br/>'.$val->message;
                } else {
                    $return   = $status;
                }


                $nData['id']           = '#'.date('Y',strtotime($val->updated_at)).$val->id;
                $nData['subject']      = $val->subject;
                $nData['message']      = $message;
                $nData['return']       = $return;
                $nData['admin']        = $val->admin;
                $nData['updated_at']   = date('j M Y h:i:s',strtotime($val->updated_at));
                $nData['created_at']   = date('j M Y h:i:s',strtotime($val->created_at));
                $nData['status']       = $status;
                $data[] = $nData;

            }
        }

        $out = array(
            "draw" => intval($this->request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );


        return $out;
    }


    /**
     * Adicionar
     *
     * @param  array $input
     * @return boolean true or false
     */
    public function create($input)
    {
        return  $this->model->create($input);
    }



}