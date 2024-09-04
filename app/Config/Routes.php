<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Auth Routes
$routes->get('/auth/hr/login', 'Auth\HRAuth::login');
$routes->post('/auth/hr/login_process', 'Auth\HRAuth::loginProcess');
$routes->get('/auth/hr/logout', 'Auth\HRAuth::logout');
$routes->get('/auth/applicant/login', 'Auth\ApplicantAuth::login');
$routes->post('/auth/applicant/login_process', 'Auth\ApplicantAuth::loginProcess');

$routes->get('/', 'Home::index');
$routes->get('/hr', 'HR::index',['filter' => 'loginCheckHR']);

$routes->post('/hr/add_applicant', 'HR::addApplicant',['filter' => 'loginCheckHR']);
$routes->delete('/hr/del_applicant/(:segment)', 'HR::delApplicant/$1',['filter' => 'loginCheckHR']);
$routes->get('/hr/applicant/(:segment)', 'HR::applicant/$1',['filter' => 'loginCheckHR']);

$routes->get('/applicant', 'Applicant::index',['filter' => 'loginCheckApplicant']);
$routes->get('/applicant/form', 'Applicant::form',['filter' => 'loginCheckApplicant']);
$routes->post('/applicant/add_form', 'Applicant::addForm',['filter' => 'loginCheckApplicant']);