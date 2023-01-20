<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Login::index');

$routes->get('/dashboard', 'Dashboard::index', ['Filter'=> 'auth']);

$routes->get('/kiloan/create', 'Kiloan::create', ['Filter'=> 'auth']);
$routes->delete('/kiloan/(:num)', 'Kiloan::delete/$1', ['Filter'=> 'auth']);

$routes->get('/satuan/create', 'Satuan::create', ['Filter'=> 'auth']);
$routes->delete('/satuan/(:num)', 'Satuan::delete/$1', ['Filter'=> 'auth']);

$routes->get('/meter/create', 'Meter::create', ['Filter'=> 'auth']);
$routes->delete('/meter/(:num)', 'Meter::delete/$1', ['Filter'=> 'auth']);

$routes->get('/pemasukan/create', 'Pemasukan::create', ['Filter'=> 'auth']);
$routes->get('/pemasukan/createkas', 'Pemasukan::createkas', ['Filter'=> 'auth']);
$routes->delete('/pemasukan/(:num)', 'Pemasukan::delete/$1', ['Filter'=> 'auth']);

$routes->get('/pengeluaran/create', 'Pengeluaran::create', ['Filter'=> 'auth']);
$routes->delete('/pengeluaran/(:num)', 'Pengeluaran::delete/$1', ['Filter'=> 'auth']);

$routes->get('/datasuplier/create', 'Datasuplier::create', ['Filter'=> 'auth']);
$routes->delete('/datasuplier/(:num)', 'Datasuplier::delete/$1', ['Filter'=> 'auth']);

$routes->get('/datauser/create', 'Datauser::create', ['Filter'=> 'auth']);
$routes->delete('/datauser/(:num)', 'Datauser::delete/$1', ['Filter'=> 'auth']);

$routes->get('/dataakun/create', 'Dataakun::create', ['Filter'=> 'auth']);
$routes->delete('/dataakun/(:num)', 'Dataakun::delete/$1', ['Filter'=> 'auth']);

$routes->get('/kas/create', 'Kas::create', ['Filter'=> 'auth']);
$routes->delete('/kas/(:num)', 'Kas::delete/$1', ['Filter'=> 'auth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}