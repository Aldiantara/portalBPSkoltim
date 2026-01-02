<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 *
 * Extend this class in any new controllers:
 * ```
 *     class Home extends BaseController
 * ```
 *
 * For security, be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */

    // protected $session;
    protected $helpers = [];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Load here all helpers you want to be available in your controllers that extend BaseController.
        // Caution: Do not put the this below the parent::initController() call below.
        // $this->helpers = ['form', 'url'];

        // Caution: Do not edit this line.
        parent::initController($request, $response, $logger);

        $this->countVisitor();

        // Preload any models, libraries, etc, here.
        // $this->session = service('session');
    }

    //Menghitung jumlah visitor/pengunjung website
    protected function countVisitor()
    {
        // debug
        // var_dump("masukk");
        // die;
        //jangan hitung kalau admin login
        if (session()->get('isLoggedIn') === true) {
            return;
        }
        $visitorModel = new \App\Models\VisitorModel();

        $ip    = $this->request->getIPAddress();
        $date  = date('Y-m-d');
        $agent = $this->request->getUserAgent()->getAgentString();

        $cek = $visitorModel->cekVisit($ip, $date);

        if ($cek == 0) {
            $visitorModel->insertVisitor($ip, $date, $agent);
        }
    }
}
