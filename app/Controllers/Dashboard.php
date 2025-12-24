<?php

namespace App\Controllers;
use Config\Database;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');

    }
}