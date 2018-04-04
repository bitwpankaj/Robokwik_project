<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register']='users/register';
$route['login']='users/login';
$route['courses/update']='courses/update';
$route['courses/create']='courses/create';
$route['courses/(:any)']='courses/view/$1';
$route['companies/create']='companies/create';
$route['courses']='courses/index';
$route['default_controller'] = 'pages/view';
$route['about']='pages/view/about';
$route['(:any)']='pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
