<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('Login', 'Login::index');
$routes->get('Register', 'Register::index');


$routes->group('data-portal', function ($routes) {
    $routes->get('/', 'DataPortal::index');              // halaman utama
    $routes->post('tambahWeb', 'DataPortal::tambahDataWeb'); // simpan data
    $routes->get('tambahWeb', 'DataPortal::tambahDataWeb');  // test / debug
    $routes->post('hapusLayanan', 'DataPortal::hapusLayanan'); // hapus data
    $routes->get('hapusLayanan', 'DataPortal::hapusLayanan');  // test / debug    
    $routes->post('getLayanan', 'DataPortal::getLayanan'); // ambil data layanan
    $routes->get('getLayanan', 'DataPortal::getLayanan');  // test / debug
    $routes->post('updateLayanan', 'DataPortal::updateLayanan'); // update data layanan
    $routes->get('updateLayanan', 'DataPortal::updateLayanan');  // test / debug

});
