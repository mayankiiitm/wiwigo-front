<?php
require_once '../app/init.php';
$route=new Route;
//wiwigo
$route->get('/','wiwigo@home');
$route->get('/search','wiwigo@search');
$route->get('/booking','wiwigo@booking');
$route->post('/process-payment','wiwigo@payment');
$route->get('/user/access_token','mauth@user_access_token');






//agency
$route->get('/mauth','mauth@request_token');
$route->get('/agency/token','mauth@agency_token');
$route->get('/agency/register','agency@register');
$route->get('/agency/login','agency@login');
$route->get('/agency/account','agencyaccount@account');
$route->get('/agency/adddriver','agencyaccount@adddriver');
$route->get('/agency/addvehicle','agencyaccount@addvehicle');
$route->get('/agency/vehicle-driver','agencyaccount@vehicles');
$route->get('/agency/logout','agencyaccount@logout');
$route->get('/test','test@home');


//user
$route->get('/register','user@register');

$route->run();
?>
