<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
// $routes->get('/DataPortal', 'DataPortal::index');
// $routes->post('DataPortal/tambahDataWeb', 'DataPortal::tambahDataWeb');
// $routes->get('DataPortal/tambahDataWeb', 'DataPortal::tambahDataWeb');
$routes->group('data-portal', function ($routes) {
    $routes->get('/', 'DataPortal::index');              // halaman utama
    $routes->post('tambahWeb', 'DataPortal::tambahDataWeb'); // simpan data
    $routes->get('tambahWeb', 'DataPortal::tambahDataWeb');  // test / debug
    $routes->post('hapusLayanan', 'DataPortal::hapusLayanan'); // hapus data
    $routes->get('hapusLayanan', 'DataPortal::hapusLayanan');  // test / debug    
});
