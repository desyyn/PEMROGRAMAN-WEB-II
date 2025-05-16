<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Praktikan::index');
$routes->get('/praktikan/profil', 'Praktikan::profil');
