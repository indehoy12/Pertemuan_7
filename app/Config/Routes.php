<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

 // Barang CRUD (BaseController)
 $routes->get('/', 'Barang::index');
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/new', 'Barang::new');
$routes->post('/barang/create', 'Barang::create');
$routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
$routes->post('/barang/update/(:num)', 'Barang::update/$1');
$routes->get('/barang/delete/(:num)', 'Barang::delete/$1');

 // Pelanggan CRUD (BaseController)
$routes->get('/pelanggan', 'Pelanggan::index');
$routes->get('/pelanggan/new', 'Pelanggan::new');
$routes->post('/pelanggan/create', 'Pelanggan::create');
$routes->get('/pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
$routes->post('/pelanggan/update/(:num)', 'Pelanggan::update/$1');
$routes->get('/pelanggan/delete/(:num)', 'Pelanggan::delete/$1');

// Transaksi
$routes->get('/transaksi', 'Transaksi::index');
$routes->get('/transaksi/new', 'Transaksi::new');
$routes->post('/transaksi/create', 'Transaksi::create');
$routes->get('/transaksi/detail/(:num)', 'Transaksi::detail/$1');

