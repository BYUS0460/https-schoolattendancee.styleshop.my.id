<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/attendance', 'AttendanceController::index');
$routes->get('/attendance/create', 'AttendanceController::create');
$routes->post('/attendance/store', 'AttendanceController::store');
