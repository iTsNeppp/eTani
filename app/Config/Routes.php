<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/registerProcess', 'Auth::registerProcess');
$routes->get('/logout', 'Auth::logout');

$routes->group('admin', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('petani', 'Admin::petani');
    $routes->get('panen', 'Admin::panen');
    $routes->get('logs', 'Admin::logs');
    $routes->get('petani', 'Admin::petani');
    $routes->get('petani/tambah', 'Admin::tambahPetani');
    $routes->post('petani/simpan', 'Admin::simpanPetani');
    $routes->get('petani/edit/(:num)', 'Admin::editPetani/$1');
    $routes->post('petani/update/(:num)', 'Admin::updatePetani/$1');
    $routes->get('petani/hapus/(:num)', 'Admin::hapusPetani/$1');
    $routes->get('panen', 'Admin::panen');
    $routes->get('panen/tambah', 'Admin::tambahPanen');
    $routes->post('panen/simpan', 'Admin::simpanPanen');
    $routes->get('panen/edit/(:num)', 'Admin::editPanen/$1');
    $routes->post('panen/update/(:num)', 'Admin::updatePanen/$1');
    $routes->get('panen/hapus/(:num)', 'Admin::hapusPanen/$1');
});
