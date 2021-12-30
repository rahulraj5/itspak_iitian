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
$route['default_controller'] = 'home';
$route['404_override'] = 'Custom404'; // Controller name
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'home/about';
$route['whymahi'] = 'home/whymahi';
$route['career'] = 'home/career';
$route['gallery'] = 'home/gallery';
$route['contact'] = 'home/contact';
$route['blog'] = 'home/blog';
$route['blogdetail/(:any)'] = 'home/blogdetail/$1';
$route['facility'] = 'home/facility';
$route['testimonial'] = 'home/testimonial';
$route['testimonial_detail'] = 'home/testimonial_detail';
$route['form/(:any)'] = 'home/form/$1';
$route['video'] = 'home/video';
$route['registration'] = 'home/registration';
$route['thankyou'] = 'home/thankyou';
$route['courses/(:any)'] = 'home/courses/$1';
$route['admission-form'] = 'home/admissionopen';
$route['admissionform'] = 'home/admission';
$route['iitjee'] = 'home/iitjee';
$route['neet'] = 'home/neet';