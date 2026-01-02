<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// =================
// HALAMAN PUBLIK
// =================
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'homeInternal', 'Home::getInternal');
$routes->match(['get', 'post'], 'homeEksternal', 'Home::getEksternal');
$routes->post('layanan/search', 'Home::searchAjax');
$routes->get('Login', 'Login::index');
$routes->post('loginFungsi', 'Login::loginFungsi');

// =================
// HALAMAN ADMIN (WAJIB LOGIN)
// =================
$routes->group('', ['filter' => 'auth'], function ($routes) {

    $routes->get('contentDashboard', 'Dashboard::index');
    $routes->match(['get', 'post'], 'logout', 'Dashboard::logout');

    // REGISTER DIKUNCI
    $routes->get('Register', 'Register::index');
    $routes->post('registerAdmin', 'Register::registerAdmin');

    $routes->group('data-portal', function ($routes) {
        $routes->get('/', 'DataPortal::index');
        $routes->post('tambahWeb', 'DataPortal::tambahDataWeb');
        $routes->post('hapusLayanan', 'DataPortal::hapusLayanan');
        $routes->post('getLayanan', 'DataPortal::getLayanan');
        $routes->post('updateLayanan', 'DataPortal::updateLayanan');
    });
});
