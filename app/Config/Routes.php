<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', '/login');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Pegawai
$routes->group('pegawai', ['filter' => 'isPegawai'], static function ($routes) {
	$routes->get('dashboard', 'Pegawai\DashboardController::index');
	$routes->get('profile', 'ProfileController::index');
	$routes->post('profile', 'ProfileController::update');
	$routes->get('pendidikan', 'PendidikanController::index');
	$routes->get('pendidikan/create', 'PendidikanController::create');
	$routes->post('pendidikan/create', 'PendidikanController::store');
	$routes->get('pendidikan/edit/(:num)', 'PendidikanController::edit/$1');
	$routes->post('pendidikan/edit/(:num)', 'PendidikanController::update/$1');
	$routes->get('pendidikan/destroy/(:num)', 'PendidikanController::destroy/$1');
	$routes->get('pelatihan', 'PelatihanController::index');
	$routes->get('pelatihan/create', 'PelatihanController::create');
	$routes->post('pelatihan/create', 'PelatihanController::store');
	$routes->get('pelatihan/edit/(:num)', 'PelatihanController::edit/$1');
	$routes->post('pelatihan/edit/(:num)', 'PelatihanController::update/$1');
	$routes->get('pelatihan/destroy/(:num)', 'PelatihanController::destroy/$1');
	$routes->get('manajemen-akun', 'Pegawai\AccountController::index');
	$routes->get('manajemen-akun/create', 'Pegawai\AccountController::create');
	$routes->post('manajemen-akun/create', 'Pegawai\AccountController::store');
	$routes->get('manajemen-akun/edit/(:num)', 'Pegawai\AccountController::edit/$1');
	$routes->post('manajemen-akun/edit/(:num)', 'Pegawai\AccountController::update/$1');
	$routes->get('manajemen-akun/destroy/(:num)', 'Pegawai\AccountController::destroy/$1');
	$routes->get('manajemen-akun/ganti-password/(:num)', 'Pegawai\AccountController::change_password/$1');
	$routes->post('manajemen-akun/ganti-password/(:num)', 'Pegawai\AccountController::new_password/$1');
});

// User
$routes->group('user', ['filter' => 'isUser'], static function ($routes) {
	$routes->get('dashboard', 'User\DashboardController::index');
	$routes->get('profile', 'ProfileController::index');
	$routes->post('profile', 'ProfileController::update');
	$routes->get('pendidikan', 'PendidikanController::index');
	$routes->get('pendidikan/create', 'PendidikanController::create');
	$routes->post('pendidikan/create', 'PendidikanController::store');
	$routes->get('pendidikan/edit/(:num)', 'PendidikanController::edit/$1');
	$routes->post('pendidikan/edit/(:num)', 'PendidikanController::update/$1');
	$routes->get('pendidikan/destroy/(:num)', 'PendidikanController::destroy/$1');
	$routes->get('pelatihan', 'PelatihanController::index');
	$routes->get('pelatihan/create', 'PelatihanController::create');
	$routes->post('pelatihan/create', 'PelatihanController::store');
	$routes->get('pelatihan/edit/(:num)', 'PelatihanController::edit/$1');
	$routes->post('pelatihan/edit/(:num)', 'PelatihanController::update/$1');
	$routes->get('pelatihan/destroy/(:num)', 'PelatihanController::destroy/$1');
});