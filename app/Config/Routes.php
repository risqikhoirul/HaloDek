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

// Dashboard data obat
$routes->get('/dashboard', 'Dashboard\Index::index');
$routes->get('/dashboard/dataObat', 'Dashboard\DataObat::index');
$routes->post('/dashboard/dataObat/add', 'Dashboard\DataObat::add');
$routes->post('/dashboard/dataObat/update', 'Dashboard\DataObat::update');
$routes->delete('/dashboard/dataObat/delete/(:num)', 'Dashboard\DataObat::delete/$1');

// Dashboard data pasien
$routes->get('/dashboard/dataPasien', 'Dashboard\DataPasien::index');
$routes->post('/dashboard/dataPasien/add', 'Dashboard\DataPasien::add');
$routes->post('/dashboard/dataPasien/update', 'Dashboard\DataPasien::update');
$routes->delete('/dashboard/dataPasien/delete/(:num)', 'Dashboard\DataPasien::delete/$1');

// Dashboard data pegawai
$routes->get('/dashboard/pegawai', 'Dashboard\Pegawai::index');
$routes->post('/dashboard/pegawai/tambah', 'Dashboard\Pegawai::tambah');
$routes->post('/dashboard/pegawai/ubah', 'Dashboard\Pegawai::ubah');
$routes->delete('/dashboard/pegawai/hapus/(:num)', 'Dashboard\Pegawai::hapus/$1');

// Authentication routes
$routes->get('/auth/login', 'Auth\Login::index');
$routes->post('/auth/login', 'Auth\Login::login');
$routes->get('/auth/logout', 'Auth\Login::logout');

$routes->get('/dashboard/profil', 'Dashboard\Profil::index');
$routes->get('/dashboard/setting', 'Dashboard\Setting::index');
$routes->post('/dashboard/setting/update', 'Dashboard\Setting::update');


$routes->get('/dashboard/mediakesehatan', 'Dashboard\Media::index');
$routes->get('/dashboard/mediakesehatan/tambah', 'Dashboard\Media::tambah');
$routes->post('/dashboard/mediakesehatan/tambah/add', 'Dashboard\Media::add');
$routes->get('/dashboard/mediakesehatan/ubah/(:num)', 'Dashboard\Media::ubah/$1');
$routes->post('/dashboard/mediakesehatan/ubah/update', 'Dashboard\Media::update');
$routes->delete('/dashboard/mediakesehatan/delete/(:num)', 'Dashboard\Media::delete/$1');

$routes->get('/media', 'Dashboard\Media::indexAll');
$routes->get('/media/view/(:num)', 'Dashboard\Media::indexFind/$1');


