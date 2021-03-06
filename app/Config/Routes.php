<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');

// auth
$routes->get('/login', 'AuthController::login');
$routes->post('/login/process', 'AuthController::login_process');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/process', 'AuthController::register_process');
$routes->get('/logout', 'AuthController::logout');

// presence
$routes->get('/presence', 'PresenceController::index');
$routes->post('/presence/input', 'PresenceController::presence');
$routes->get('/export', 'PresenceController::export');

//admin
$routes->get('/dashboard', 'HomeController::dashboardIndex');
$routes->get('/all-presences', 'PresenceController::all_presence');
$routes->get('/practical-works', 'PracticalWorkController::index');
$routes->get('/practical-works/create', 'PracticalWorkController::create');
$routes->post('/practical-works/store', 'PracticalWorkController::store');
$routes->post('/practical-works/delete', 'PracticalWorkController::delete');
$routes->get('/divisions', 'DivisionController::index');
$routes->get('/divisions/create', 'DivisionController::create');
$routes->post('/divisions/store', 'DivisionController::store');
$routes->post('/divisions/delete', 'DivisionController::delete');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
