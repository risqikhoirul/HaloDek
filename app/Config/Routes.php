<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cekbmi', 'Bmi::index');
$routes->get('/carirs', 'Carirs::index');
$routes->get('/ambulan', 'Ambulan::index');
$routes->get('/kesehatan', 'Kesehatan::index');