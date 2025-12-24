<?php

namespace App\Controllers;

use Config\Database;

class Register extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Register Admin Portal BPS Koltim'
        ];
        return view('admin/register', $data);
    }
}
