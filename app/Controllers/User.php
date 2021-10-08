<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{
    protected $user;

    function __construct()
    {
        $this->user = new UsersModel();
    }

    public function index()
    {
        $data['user'] = $this->user->findAll();
        return view('user/index', $data);
    }
}