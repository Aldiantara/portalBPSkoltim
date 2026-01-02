<?php

namespace App\Controllers;

use Config\Database;
use App\Models\VisitorModel;

class Dashboard extends BaseController
{
    protected $visitorModel;

    public function __construct()
    {
        $this->visitorModel = new VisitorModel();
    }

    public function index()
    {
        $visitorModel = new VisitorModel();

        $tahun = $this->request->getGet('tahun') ?? date('Y');
        $visitorBulanan = $visitorModel->getVisitorPerBulan($tahun);

        $dataBulan = array_fill(1, 12, 0);
        foreach ($visitorBulanan as $v) {
            $dataBulan[(int)$v->bulan] = (int)$v->total;
        }

        return view('admin/contentDashboard', [
            'visitorBulanan' => array_values($dataBulan),
            'dataBulan'      => $dataBulan,
            'tahun' => $tahun
        ]);
    }

    //fungsi untuk logout admin
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
