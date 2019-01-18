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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home'] 		= 'beranda/dashboard';
$route['logout']	= 'auth/logout';

$route['kriteria']					= 'kriteria/Kriteria';
$route['kriteria/create']			= 'kriteria/Kriteria/create_kriteria';
$route['kriteria/delete/(:any)']	= 'kriteria/kriteria/delete_kriteria/$1';
$route['kriteria/edit/(:any)']		= 'kriteria/Kriteria/edit_kriteria/$1';
$route['kriteria/update']			= 'kriteria/Kriteria/update_kriteria';

$route['alternatif']				= 'alternatif/alternatif';
$route['alternatif/create']			= 'alternatif/alternatif/create_alternatif';
$route['alternatif/delete/(:any)']	= 'alternatif/alternatif/delete_alternatif/$1';
$route['alternatif/edit/(:any)']	= 'alternatif/alternatif/edit_alternatif/$1';
$route['alternatif/update']			= 'alternatif/alternatif/update_alternatif';

$route['user']				= 'user/user';
$route['user/create']			= 'user/user/create_user';
$route['user/delete/(:any)']	= 'user/user/delete_user/$1';
$route['user/edit/(:any)']	= 'user/user/edit_user/$1';
$route['user/update']			= 'user/user/update_user';
