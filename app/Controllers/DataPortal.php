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
    //tutup fungsi hapus data website

    //fungsi ambil data layanan
    function getLayanan()
    {
        $idLayanan = $this->request->getPost('idLayanan');

        $dataLayanan = $this->dataPortalModel->getLayanan($idLayanan);
        // var_dump($dataLayanan);
        // die;
        if ($dataLayanan) {
            $hasil = [
                'status' => '1',
                'pesan' => 'Data layanan Berhasil Diambil',
                'data' => $dataLayanan
            ];
        } else {
            $hasil = [
                'status' => '0',
                'pesan' => 'Data layanan Gagal Diambil',
                'data' => $dataLayanan
            ];
        }
        echo json_encode($hasil);
    }
    //tutup fungsi ambil data layanan

    //fungsi update data Layanan
    public function updateLayanan()
    {
        $idLayanan  = $this->request->getPost('idLayanan');
        $namaWebsite = $this->request->getPost('namaWebsite2');
        $url        = $this->request->getPost('url2');
        $deskripsi  = $this->request->getPost('deskripsi2');
        $kategori   = $this->request->getPost('kategori2');

        // Validasi data lama
        $dataLama = $this->dataPortalModel->getLayanan($idLayanan);
        if (!$dataLama) {
            return $this->response->setJSON([
                'status' => false,
                'pesan' => 'Data tidak ditemukan'
            ]);
        }

        $sampul = $dataLama->gambarLayanan;

        // Validasi file upload
        $gambar = $this->request->getFile('sampul2');
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {

            // hapus gambar lama
            if ($sampul && file_exists('gambar/' . $sampul)) {
                unlink('gambar/' . $sampul);
            }

            $sampul = $gambar->getRandomName();
            $gambar->move('gambar', $sampul);
        }

        $data = [
            'namaLayanan'        => $namaWebsite,
            'url'                => $url,
            'deskripsiLayanan'   => $deskripsi,
            'gambarLayanan'     => $sampul,
            'kategori'           => $kategori
        ];
        $update = $this->dataPortalModel->updateDataLayanan($idLayanan, $data);

        return $this->response->setJSON([
            'status' => $update ? true : false,
            'pesan'  => $update ? 'Data berhasil diupdate' : 'Gagal update data'
        ]);
    }

    //tutup fungsi update data Layanan
}
