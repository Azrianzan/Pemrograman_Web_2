<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Beranda::index');
$routes->get('/beranda', 'Beranda::index');
$routes->get('/beranda/profil', 'Beranda::profil');
