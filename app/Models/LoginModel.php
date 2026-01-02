<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // query cek data Admin sudah ada atau belum
    public function getDataAdminByUsername($username)
    {
        $dataAdmin = $this->db->query("SELECT * FROM login WHERE username = ?", [$username])->getRow();
        return $dataAdmin;
    }

    // query register admin baru
    function register($namaLengkap, $username, $password)
    {
        $regis = $this->db->query("INSERT INTO login (idUser, namaLengkap, userName, password) VALUES ('', '$namaLengkap', '$username', '$password')");
        return $regis;
    }

    // query ambil data admin berdasarkan username dan password untuk fungsi login
    function getDataAdmin($username)
    {
        $dataAdmin = $this->db->query("SELECT * FROM login WHERE userName = '$username'")->getRow();
        return $dataAdmin;
    }
}
