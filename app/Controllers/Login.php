<?php

namespace App\Controllers;

use Config\Database;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Login Admin Portal BPS Koltim'
        ];
        return view('admin/login', $data);
    }

    //fungsi untuk proses login admin
    public function loginFungsi()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        $dataAdmin = $this->loginModel->getDataAdmin($username); //cek data admin berdasarkan username

        if (!empty($dataAdmin)) {
            //verifikasi password
            if (password_verify($password, $dataAdmin->password)) {
                //jika password benar, buat session
                $sessionData = [
                    'idUser' => $dataAdmin->idUser,
                    'namaLengkap' => $dataAdmin->namaLengkap,
                    'username' => $dataAdmin->userName,
                    'isLoggedIn' => true
                ];
                session()->set($sessionData);
                return $this->response->setJSON(['status' => 'success', 'message' => 'Login berhasil.']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Password salah. Silahkan coba lagi.']);
            }
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Username tidak ditemukan. Silahkan coba lagi.']);
        }
    }
}
