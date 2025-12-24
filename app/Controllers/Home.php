<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Portal BPS Koltim'
        ];
        return view('user/index', $data);
    }
}


// class asa extends BaseController
// {
//     public function index()
//     {
//         try {
//             $db = Database::connect();
//             $db->query('SELECT 1');
//             return 'Koneksi database CI4: AMAN ✅';
//         } catch (\Throwable $e) {
//             return 'Koneksi database CI4: GAGAL ❌<br>' . $e->getMessage();
//         }
//     }
// }
