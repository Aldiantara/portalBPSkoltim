<?php

namespace App\Controllers;

use Config\Database;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login Admin Portal BPS Koltim'
        ];
        return view('admin/login', $data);
    }
}
