<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'UserController::index');
$routes->get('/users', 'UserController::index');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/users/update', 'UserController::update');
$routes->get('/users/delete/(:num)', 'UserController::delete/$1');


// employee data crud

$routes->get('employee', 'EmployeeController::index');
$routes->get('employee-add', 'EmployeeController::create');
$routes->post('employee-store','EmployeeController::store');

//CRUD Operations

$routes->get('namelist', 'NamesCrud::index');
$routes->get('addname', 'NamesCrud::create');
$routes->post('submit-form', 'NamesCrud::store');
$routes->get('editnames/(:num)', 'NamesCrud::singleUser/$1');
$routes->post('update', 'NamesCrud::update');
$routes->get('delete/(:num)', 'NamesCrud::delete/$1');