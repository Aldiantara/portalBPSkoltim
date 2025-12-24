<?php

namespace App\Controllers;

use App\Models\DataPortalModel;

class DataPortal extends BaseController
{
    protected $dataPortalModel;

    public function __construct()
    {
        $this->dataPortalModel = new DataPortalModel();
    }

    public function index()
    {
        $data = [
            'title'       => 'Data Portal Website',
            'data'  => $this->dataPortalModel->getDataWeb(),
        ];

        return view('admin/dataPortal', $data);
    }

    //fungsi tambah data website
    function tambahDataWeb()
    {
        // var_dump("masukk");
        // die;
        $gambar = $this->request->getFile('sampul');
        $sampul = $gambar->getName();
        $gambar->move('gambar', $sampul);

        $namaWebsite = $this->request->getVar('namaWebsite');
        $url = $this->request->getVar('url');
        $deskripsi = $this->request->getVar('deskripsi');
        $kategori = $this->request->getVar('kategori');

        $data = [
            'namaLayanan'  => $namaWebsite,
            'url'          => $url,
            'deskripsiLayanan'    => $deskripsi,
            'gambarLayanan'       => $sampul,
            'kategori'     => $kategori
        ];

        $tambah = $this->dataPortalModel->tambahDataWeb($data);
        if ($tambah) {
            $hasil = [
                'status' => '1',
                'pesan' => 'Data website Berhasil Ditambahkan',
                'data' => $tambah
            ];
        } else {
            $hasil = [
                'status' => '0',
                'pesan' => 'Data website Gagal Ditambahkan',
                'data' => $tambah
            ];
        }
        echo json_encode($hasil);
    }
    //tutup fungsi tambah data website

    //fungsi hapus data website
    function hapusLayanan()
    {
        $idLayanan = $this->request->getVar('idLayanan');
        $gambarLayanan = $this->request->getVar('gambarLayanan');

        // Hapus file gambar dari folder
        if (file_exists('gambar/' . $gambarLayanan)) {
            unlink('gambar/' . $gambarLayanan);
        }

        $hapus = $this->dataPortalModel->hapusLayanan($idLayanan);
        if ($hapus) {
            $hasil = [
                'status' => '1',
                'pesan' => 'Data website Berhasil Dihapus',
                'data' => $hapus
            ];
        } else {
            $hasil = [
                'status' => '0',
                'pesan' => 'Data website Gagal Dihapus',
                'data' => $hapus
            ];
        }
        echo json_encode($hasil);
    }
}
