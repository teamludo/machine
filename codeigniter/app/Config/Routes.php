<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->post('/insertion', 'Main::inserer');
$routes->get('/list', 'Main::afficherList');
$routes->get('/suppression/(:num)', 'Main::supprimer/$1');
$routes->get('/modification/(:num)', 'Main::modifier/$1');
$routes->post('/modifier/(:num)','Main::modification/$1');
