<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Pegawai
$routes->get('/pegawai/dashboard', 'Pegawai\DashboardController::index', ['filter' => 'isPegawai']);
$routes->get('/pegawai/profile', 'ProfileController::index', ['filter' => 'isPegawai']);
$routes->post('/pegawai/profile', 'ProfileController::update', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pendidikan', 'PendidikanController::index', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pendidikan/create', 'PendidikanController::create', ['filter' => 'isPegawai']);
$routes->post('/pegawai/pendidikan/create', 'PendidikanController::store', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pendidikan/edit/(:num)', 'PendidikanController::edit/$1', ['filter' => 'isPegawai']);
$routes->post('/pegawai/pendidikan/edit/(:num)', 'PendidikanController::update/$1', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pendidikan/destroy/(:num)', 'PendidikanController::destroy/$1', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pelatihan', 'PelatihanController::index', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pelatihan/create', 'PelatihanController::create', ['filter' => 'isPegawai']);
$routes->post('/pegawai/pelatihan/create', 'PelatihanController::store', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pelatihan/edit/(:num)', 'PelatihanController::edit/$1', ['filter' => 'isPegawai']);
$routes->post('/pegawai/pelatihan/edit/(:num)', 'PelatihanController::update/$1', ['filter' => 'isPegawai']);
$routes->get('/pegawai/pelatihan/destroy/(:num)', 'PelatihanController::destroy/$1', ['filter' => 'isPegawai']);
$routes->get('/pegawai/manajemen-akun', 'Pegawai\AccountController::index', ['filter' => 'isPegawai']);
$routes->get('/pegawai/manajemen-akun/create', 'Pegawai\AccountController::create', ['filter' => 'isPegawai']);
$routes->post('/pegawai/manajemen-akun/create', 'Pegawai\AccountController::store', ['filter' => 'isPegawai']);
$routes->get('/pegawai/manajemen-akun/edit/(:num)', 'Pegawai\AccountController::edit/$1', ['filter' => 'isPegawai']);
$routes->post('/pegawai/manajemen-akun/edit/(:num)', 'Pegawai\AccountController::update/$1', ['filter' => 'isPegawai']);
$routes->get('/pegawai/manajemen-akun/destroy/(:num)', 'Pegawai\AccountController::destroy/$1', ['filter' => 'isPegawai']);
$routes->get('/pegawai/manajemen-akun/ganti-password/(:num)', 'Pegawai\AccountController::change_password/$1', ['filter' => 'isPegawai']);
$routes->post('/pegawai/manajemen-akun/ganti-password/(:num)', 'Pegawai\AccountController::new_password/$1', ['filter' => 'isPegawai']);

// User
$routes->get('/user/dashboard', 'User\DashboardController::index', ['filter' => 'isUser']);
$routes->get('/user/profile', 'ProfileController::index', ['filter' => 'isUser']);
$routes->post('/user/profile', 'ProfileController::update', ['filter' => 'isUser']);
$routes->get('/user/pendidikan', 'PendidikanController::index', ['filter' => 'isUser']);
$routes->get('/user/pendidikan/create', 'PendidikanController::create', ['filter' => 'isUser']);
$routes->post('/user/pendidikan/create', 'PendidikanController::store', ['filter' => 'isUser']);
$routes->get('/user/pendidikan/edit/(:num)', 'PendidikanController::edit/$1', ['filter' => 'isUser']);
$routes->post('/user/pendidikan/edit/(:num)', 'PendidikanController::update/$1', ['filter' => 'isUser']);
$routes->get('/user/pendidikan/destroy/(:num)', 'PendidikanController::destroy/$1', ['filter' => 'isUser']);
$routes->get('/user/pelatihan', 'PelatihanController::index', ['filter' => 'isUser']);
$routes->get('/user/pelatihan/create', 'PelatihanController::create', ['filter' => 'isUser']);
$routes->post('/user/pelatihan/create', 'PelatihanController::store', ['filter' => 'isUser']);
$routes->get('/user/pelatihan/edit/(:num)', 'PelatihanController::edit/$1', ['filter' => 'isUser']);
$routes->post('/user/pelatihan/edit/(:num)', 'PelatihanController::update/$1', ['filter' => 'isUser']);
$routes->get('/user/pelatihan/destroy/(:num)', 'PelatihanController::destroy/$1', ['filter' => 'isUser']);