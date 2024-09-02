<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Auth Routes
$routes->get('/auth/hr/login', 'Auth\HRAuth::login');
$routes->post('/auth/hr/login_process', 'Auth\HRAuth::loginProcess');
$routes->get('/auth/hr/logout', 'Auth\HRAuth::logout');

$routes->get('/', 'Home::index');
$routes->get('/hr', 'HR::index',['filter' => 'loginCheck']);
