<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPortalModel extends Model
{
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    //fungsi/query menampilkan data website
    public function getDataWeb()
    {
        $data = $this->db->query("SELECT * FROM layanan");
        return $data->getResultArray();
    }

    //fungsi/query tambah data website
    public function tambahDataWeb($tambah)
    {
        $namaWebsite = $tambah['namaLayanan'];
        $url = $tambah['url'];
        $deskripsi = $tambah['deskripsiLayanan'];
        $sampul = $tambah['gambarLayanan'];
        $kategori = $tambah['kategori'];

        $tambah = $this->db->query("INSERT INTO layanan (idLayanan, namaLayanan, url, deskripsiLayanan, gambarLayanan, kategori) VALUES ('','$namaWebsite', '$url', '$deskripsi', '$sampul', '$kategori')");
        return $tambah;
    }

    //fungsi/query hapus data website
    public function hapusLayanan($idLayanan)
    {
        $hapus = $this->db->query("DELETE FROM layanan WHERE idLayanan = '$idLayanan'");
        return $hapus;
    }
}
