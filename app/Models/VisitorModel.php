<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    //cek apakah ip sudah visit hari ini
    public function cekVisit($ip, $data)
    {
        $cekVisit = $this->db->query("SELECT idvisit FROM visitors WHERE ipaddress = '$ip' AND visit_date = '$data'")->getNumRows();
        return $cekVisit;
    }

    // simpan visitor baru
    public function insertVisitor($ip, $data, $agent)
    {
        $insertVisit = $this->db->query("INSERT INTO visitors (idvisit, ipaddress, visit_date, userAgent) VALUES ('', '$ip', '$data', '$agent')");
        return $insertVisit;
    }

    // public function getVisitorPerTanggal($tahun)
    // {
    //     $tampilVisit = $this->db->query("SELECT DATE(visit_date) AS tanggal,COUNT(*) AS total FROM visitors WHERE YEAR(visit_date) = '$tahun' GROUP BY DATE(visit_date) ORDER BY DATE(visit_date) ASC")->getResult();
    //     // $tampilVisit = $this->db->query("SELECT MONTH(visit_date) AS bulan, COUNT(*) AS total FROM visitors WHERE YEAR(visit_date) = '$tahun' GROUP BY MONTH(visit_date) ORDER BY MONTH(visit_date)")->getResult();
    //     return $tampilVisit;
    // }
    public function getVisitorPerBulan($tahun)
    {
        // $tampilVisit = $this->db->query("SELECT DATE(visit_date) AS tanggal,COUNT(*) AS total FROM visitors WHERE YEAR(visit_date) = '$tahun' GROUP BY DATE(visit_date) ORDER BY DATE(visit_date) ASC")->getResult();
        $tampilVisitt = $this->db->query("SELECT MONTH(visit_date) AS bulan, COUNT(*) AS total FROM visitors WHERE YEAR(visit_date) = '$tahun' GROUP BY MONTH(visit_date) ORDER BY MONTH(visit_date)")->getResult();
        return $tampilVisitt;
    }
}
