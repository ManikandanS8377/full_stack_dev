<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/createValue', 'Home::createValue');
$routes->get('/readValue', 'Home::readValue');
$routes->get('/updateValue', 'Home::updateValue');
$routes->get('/deleteValue', 'Home::deleteValue');
$routes->get('/EditData', 'Home::editPage');
$routes->get('/DeleteData', 'Home::deletePage');
