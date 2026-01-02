<?php

namespace App\Controllers;

use Config\Database;
use App\Models\HomeModel;
use App\Models\VisitorModel;

class Home extends BaseController
{
    protected $homeModel;
    protected $visitorModel;

    public function __construct()
    {
        $this->homeModel = new HomeModel();
        $this->visitorModel = new VisitorModel();
    }
    public function index()
    {
        // HITUNG VISITOR (jika admin belum login)
        // if (!session()->get('isLoggedIn')) {

        //     $ip    = $this->request->getIPAddress();
        //     $date  = date('Y-m-d');
        //     $agent = $this->request->getUserAgent()->getAgentString();

        //     $cek = $this->visitorModel->cekVisitor($ip, $date);

        //     if ($cek == 0) {
        //         $this->visitorModel->insertVisitor($ip, $date, $agent);
        //     }
        // }

        $data = [
            'title' => 'Portal BPS Koltim',
            'data' => $this->homeModel->getDataWeb(),
        ];
        return view('user/index', $data);
    }

    // fungsi ambil data internal
    public function getInternal()
    {
        $dataInternal = $this->homeModel->getInternal();

        if (!$dataInternal) {
            return $this->response->setJSON([
                'status' => '0',
                'pesan' => 'Data layanan internal tidak ditemukan',
                'data' => []
            ]);
        } else {
            $output = [];
            foreach ($dataInternal as $data) {
                $output[] = [
                    'idLayanan' => $data['idLayanan'],
                    'namaLayanan' => $data['namaLayanan'],
                    'url' => $data['url'],
                    'deskripsiLayanan' => $data['deskripsiLayanan'],
                    'gambarLayanan' => $data['gambarLayanan'],
                    'kategori' => $data['kategori']
                ];
            }
            return $this->response->setJSON([
                'status' => '1',
                'pesan' => 'Data layanan internal ditemukan',
                'data' => $output
            ]);
        }
    }

    // fungsi ambil data eksternal
    public function getEksternal()
    {
        $dataEksternal = $this->homeModel->getEksternal();
        if (!$dataEksternal) {
            return $this->response->setJSON([
                'status' => '0',
                'Pesan' => 'Data Layanan Publik Tidak Ditemukan',
                'data' => []
            ]);
        } else {
            $result = [];
            foreach ($dataEksternal as $data) {
                $result[] = [
                    'idLayanan' => $data['idLayanan'],
                    'namaLayanan' => $data['namaLayanan'],
                    'url' => $data['url'],
                    'deskripsiLayanan' => $data['deskripsiLayanan'],
                    'gambarLayanan' => $data['gambarLayanan'],
                    'kategori' => $data['kategori']
                ];
            }
            return $this->response->setJSON([
                'status' => '1',
                'pesan' => 'Data Layanan Publik Ditemukan',
                'data' => $result
            ]);
        }
    }

    public function searchAjax()
    {
        if (!$this->request->isAJAX()) {
            return;
        }

        $keyword  = $this->request->getPost('search');
        $kategori = $this->request->getPost('kategori');

        $data  = $this->homeModel->searchLayanan($keyword, $kategori);

        return $this->response->setJSON($data);
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
