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
$routes->get('/auth/applicant/logout', 'Auth\ApplicantAuth::logout');
$routes->get('/auth/user/login', 'Auth\UserAuth::login');
$routes->post('/auth/user/login_process', 'Auth\UserAuth::loginProcess');
$routes->get('/auth/user/logout', 'Auth\UserAuth::logout');

$routes->get('/', 'Home::index');
$routes->get('/hr', 'HR::index',['filter' => 'loginCheckHR']);

$routes->post('/hr/add_applicant', 'HR::addApplicant',['filter' => 'loginCheckHR']);
$routes->delete('/hr/del_applicant/(:segment)', 'HR::delApplicant/$1',['filter' => 'loginCheckHR']);
$routes->get('/hr/applicant/(:segment)', 'HR::applicant/$1',['filter' => 'loginCheckHR']);
$routes->post('/hr/add_selection', 'HR::addSelection',['filter' => 'loginCheckHR']);

$routes->get('/hr/job_setting', 'HR::jobSetting',['filter' => 'loginCheckHR']);
$routes->post('/hr/add_job', 'HR::addJob',['filter' => 'loginCheckHR']);
$routes->post('/hr/del_job', 'HR::delJob',['filter' => 'loginCheckHR']);
$routes->post('/hr/add_job_category', 'HR::addJobCategory',['filter' => 'loginCheckHR']);
$routes->post('/hr/del_job_category', 'HR::delJobCategory',['filter' => 'loginCheckHR']);
$routes->post('/hr/add_job_position', 'HR::addJobPosition',['filter' => 'loginCheckHR']);
$routes->post('/hr/del_job_position', 'HR::delJobPosition',['filter' => 'loginCheckHR']);
$routes->post('/hr/add_job_organization', 'HR::addJobOrganization',['filter' => 'loginCheckHR']);
$routes->post('/hr/del_job_Organization', 'HR::delJobOrganization',['filter' => 'loginCheckHR']);

$routes->post('/hr/add_user', 'HR::addUser',['filter' => 'loginCheckHR']);

$routes->get('/applicant', 'Applicant::index',['filter' => 'loginCheckApplicant']);
$routes->get('/applicant/form', 'Applicant::form',['filter' => 'loginCheckApplicant']);
$routes->post('/applicant/add_form', 'Applicant::addForm',['filter' => 'loginCheckApplicant']);

$routes->get('/user', 'User::index',['filter' => 'loginCheckUser']);
$routes->get('/user/applicant/(:segment)', 'User::applicant/$1',['filter' => 'loginCheckUser']);
$routes->post('/user/add_selection', 'User::addSelection',['filter' => 'loginCheckUser']);
