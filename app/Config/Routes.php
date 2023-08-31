<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Register');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Register::index');
$routes->get('/registration/event/(:any)', 'Registration::event/$1');
$routes->post('/reg-process', 'Registration::registerProccess');
// $routes->get('/generate-qr-code', 'Register::generateQRCode');
$routes->get('/qr-code/(:any)', 'Registration::QRCode');


// $routes->get('/event/(:any)', 'Event::index/$1');
// $routes->get('/event/(:num)/search', 'Event::searchUser/$1');
// $routes->get('/event/(:num)/confirm', 'Event::attendanceConfirm/$1');
// $routes->get('/event/(:num)/thank-you', 'Event::thankYou/$1');

// $routes->get('/attendance', 'Attendance::index');
// $routes->post('/confirm-attendance', 'Attendance::AttendanceConfirm');        

// $routes->get('/participants', 'Participants::index');
// $routes->get('/participants/attendance', 'Participants::attendanceList');        


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
