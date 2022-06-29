<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Page');
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
//$routes->get('/', 'Home::index');

//$routes->get('/users/(:any)', 'Users::index/$1');

/** PAGES */

//$routes->get('adminer/(:any)', ucfirst($1).'::index');
$routes->group('adminer', function ($routes) {
    $routes->add('users', 'Users::index');
    $routes->add('dashevent', 'Dashevent::index');
});

// Diplome 
//$routes->get('/certifi/', 'Page::apropos');


//actionshumanitaires
$routes->get('/apropos/', 'Page::apropos');
$routes->get("/ambassadeur", "Page::ambassadeur");
$routes->get('/faq/', 'Page::faq');
$routes->get('/donate/', 'Page::donate');
$routes->get("pwords", "Page::pwords");
$routes->get('/certificat/', 'Diplome::index'); //authentification
$routes->get('/certificat/authentification/', 'Diplome::authentification'); //
$routes->get('/team/', 'Page::team');
$routes->get('/event/', 'Page::event');
$routes->get('/photos/', 'Page::mediatheque/photos');
$routes->get('/videos/', 'Page::mediatheque/videos');
$routes->get('/contactus/', 'Page::contactus');
$routes->get('/cause', 'Page::cause');
$routes->add('cause/(:any)', 'Page::cause/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
