<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // return view('dashboard');
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('dashboard');
        echo view('layout/footer');
    }
}