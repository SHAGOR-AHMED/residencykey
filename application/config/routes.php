<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Blog-List']='Welcome/Blog';
$route['Services']='Welcome/Services';
$route['Home-Loan']='Welcome/HomeLoan';
$route['Residency-Key']='Welcome/index';
$route['Sell-Property']='Welcome/SellProperty';
$route['Property-List']='Welcome/PropertyList';
$route['Check-Value']='Welcome/CheckValue';
$route['Buyer-Guide']='Welcome/BuyerGuide';
$route['Save-Seller']='Welcome/save_seller';
$route['Seller']='Seller/index';
$route['Create-Seller']='Seller/SaveSellerInfo';
$route['Login-Seller']='Seller/loginSeller';
$route['Blog-Details/(:num)']='Welcome/BlogDetails/$1';
$route['Property-Details/(:num)']='Welcome/PropertyDetails/$1';

/*--Admin Panel--*/
