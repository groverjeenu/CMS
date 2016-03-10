<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['public/js/(:any)'] = "public/js/$1";
$route['(.+)/js/(.*)'] = "welcome/test/$2";
$route['faculty/search'] = "courses/search_faculty";
$route['courses/(:num)/quiz'] = 'quiz/quiz/index/$1';
$route['courses/(:num)/students'] = 'courses/facultystudents/$1';
$route['courses/(:num)/assignments'] = 'assignments/listall/$1';
$route['courses/(:num)/lectures'] = 'courses/lectures/$1';
$route['courses/edit/(:num)/add_faculty'] = 'courses/add_faculty/$1';
$route['courses/edit/(:num)/add_cadmin'] = 'courses/add_cadmin/$1';
$route['courses/edit/(:num)/meta'] = 'courses/edit_meta/$1';
$route['courses/edit/(:num)'] = 'courses/edit_general/$1';
$route['courses/(:num)/assignments/edit/(:num)'] = 'assignments/edit/$1/$2';
$route['courses/(:num)/assignments/(:num)'] = 'assignments/index/$1/$2';
$route['courses/(:num)/assignments/add'] = 'assignments/add/$1';
$route['courses/(:num)/lessons/edit/(:num)'] = 'lessons/edit/$1/$2';
$route['courses/(:num)/lessons/(:num)'] = 'lessons/index/$1/$2';
$route['courses/(:num)/lessons/add'] = 'lessons/add/$1';
$route['courses/(:num)'] = "display_view/course/$1";
$route['dashboard'] = 'display_view/dashboard';
$route['signup'] = 'auth/create_user';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['inbox']= "display_view/inbox";
$route['quiz/categories'] = "quiz/category_controller";
$route['default_controller'] = 'welcome';
$route['user/(:any)'] = 'display_view/view_profile';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
