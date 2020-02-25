<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['users/create'] = 'users/create';
$route['users/edit'] = 'users/edit';

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
