<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('empleados','Empleados::index');
//$routes->get('empleados/new','Empleados::new');

// $routes->resource('empleados', ['placeholder' => '(:num)', 'except' => 'show']);

$routes->get('empleados/new', 'Empleados::new');
$routes->post('empleados', 'Empleados::create');
$routes->get('empleados', 'Empleados::index');
$routes->get('empleados/(:num)/edit', 'Empleados::edit/$1');
$routes->post('empleados/(:num)', 'Empleados::update/$1');
$routes->delete('empleados/(:num)', 'Empleados::delete/$1');
