<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Frontend_Controller';
$route['Register'] = 'Frontend_Controller/register';

$route['admin'] = 'Admin_Controller';
$route['dashboard'] = 'Admin_Controller/dashboard';
$route['logout'] = 'Admin_Controller/logout';
$route['admin-user'] = 'Admin_Controller/adminuser';
$route['dashboard/add-resident'] = 'Admin_Controller/addresident';
$route['dashboard/add-officials'] = 'Admin_Controller/addofficials';
$route['dashboard/brgy-info'] = 'Admin_Controller/barangayinfo';
$route['dashboard/add-rbi'] = 'Admin_Controller/addrbi';
$route['dashboard/view-resident'] = 'Admin_Controller/viewresident';
$route['dashboard/view-officials'] = 'Admin_Controller/viewofficials';
$route['dashboard/delete-resident/(:any)'] = 'Admin_Controller/deleteresident/$1';
$route['dashboard/delete-officials/(:any)'] = 'Admin_Controller/deleteofficials/$1';
$route['dashboard/update-resident/(:any)'] = 'Admin_Controller/update_resident/$1';
$route['dashboard/update-officials/(:any)'] = 'Admin_Controller/updateofficials/$1';
$route['dashboard/view-blotter'] = 'Admin_Controller/blotter_info';
$route['dashboard/add-blotter'] = 'Admin_Controller/addblotter';
$route['dashboard/delete-blotter/(:any)'] = 'Admin_Controller/delete_blotter/$1';
$route['dashboard/edit-blotter/(:any)'] = 'Admin_Controller/edit_blotter/$1';
$route['dashboard/update-blotter/(:any)'] = 'Admin_Controller/updateblotter/$1';


 /* AJAX  */
$route['dashboard/ajax-update-official-form']['post'] = 'Admin_Controller/ajax_update_official_form';
$route['dashboard/ajax-update-resident-form']['post'] = 'Admin_Controller/ajax_update_resident_form';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;