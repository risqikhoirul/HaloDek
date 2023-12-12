<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routes for general pages
$routes->get('/', 'Home::index');
$routes->get('/cekbmi', 'Bmi::index');
$routes->get('/carirs', 'Carirs::index');
$routes->get('/ambulan', 'Ambulan::index');
$routes->get('/kesehatan', 'Kesehatan::index');
$routes->get('/blog', 'BlogKesehatan::index');

// Dashboard routes
$routes->get('/dashboard', 'Dashboard\Index::index');
$routes->get('/dashboard/dataObat', 'Dashboard\DataObat::index');
$routes->post('/dashboard/dataObat/add', 'Dashboard\DataObat::add');
$routes->post('/dashboard/dataObat/update', 'Dashboard\DataObat::update');
// $routes->post('/dashboard/dataObat/(:num)', 'Dashboard\DataObat::update/$1');
$routes->delete('/dashboard/dataObat/delete/(:num)', 'Dashboard\DataObat::delete/$1');

// Authentication routes
$routes->get('/auth/login', 'Auth\Login::index');
$routes->post('/auth/login', 'Auth\Login::login');
$routes->get('/auth/logout', 'Auth\Login::logout');
