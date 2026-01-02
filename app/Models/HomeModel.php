<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // fungsi/query menampilkan data website
    public function getDataWeb()
    {
        $data = $this->db->query("SELECT * FROM layanan");
        return $data->getResultArray();
    }
    //fungsi/query menampilkan data layanan internal
    public function getInternal()
    {
        $data = $this->db->query("SELECT * FROM layanan WHERE kategori='internal'");
        return $data->getResultArray();
    }
    //fungsi/query menampilkan data layanan eksternal
    public function getEksternal()
    {
        $data = $this->db->query("SELECT * FROM layanan WHERE kategori='eksternal'");
        return $data->getResultArray();
    }
    public function searchLayanan($keyword = '', $kategori = '')
    {
        // $db = \Config\Database::connect();

        $sql = "SELECT * FROM layanan WHERE 1=1";
        $params = [];

        if ($kategori != '') {
            $sql .= " AND kategori = ?";
            $params[] = $kategori;
        }

        if ($keyword != '') {
            $sql .= " AND (
                namaLayanan LIKE ?
                OR deskripsiLayanan LIKE ?
                OR url LIKE ?
            )";

            $like = "%{$keyword}%";
            $params[] = $like;
            $params[] = $like;
            $params[] = $like;
        }

        $sql .= " ORDER BY idLayanan DESC";

        return $this->db->query($sql, $params)->getResultArray();
    }
}
