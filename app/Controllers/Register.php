<?php

namespace App\Controllers;

use Config\Database;
use App\Models\LoginModel;
use PhpParser\Node\Stmt\Return_;

class Register extends BaseController
{

    protected  $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Register Admin Portal BPS Koltim'
        ];
        return view('admin/register', $data);
    }
    public function registerAdmin()
    {
        $namaLengkap = $this->request->getPost('namaLengkap');
        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT); //enckripsi password dengan menggunakan Password has

        $dataAdmin = $this->loginModel->getDataAdminByUsername($username); //cek data admin berdasarkan username

        if (!empty($dataAdmin)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Username sudah terdaftar. Silahkan gunakan username lain.']);
        } else {
            $regis = $this->loginModel->register($namaLengkap, $username, $password);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Registrasi melakukan berhasil.']);
        }
    }
}
