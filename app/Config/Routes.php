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

// User
$routes->get('/user/dashboard', 'User\DashboardController::index', ['filter' => 'isUser']);
$routes->get('/user/profile', 'ProfileController::index', ['filter' => 'isUser']);
$routes->post('/user/profile', 'ProfileController::update', ['filter' => 'isUser']);
