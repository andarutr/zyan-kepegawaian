<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/pegawai/dashboard', 'Pegawai\DashboardController::index', ['filter' => 'isPegawai']);
$routes->get('/user/dashboard', 'User\DashboardController::index', ['filter' => 'isUser']);
