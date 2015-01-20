<?php
require_once '../app/init.php';
$route=new Route;
$route->get('/mauth','mauth@request_token');
$route->get('/agency/token','mauth@agency_token');
$route->get('/user/access_token','mauth@user_access_token');
$route->get('/agency/register','agency@register');
$route->get('/agency/login','agency@login');
$route->get('/agency/account','agencyaccount@account');
$route->get('/agency/adddriver','agencyaccount@adddriver');
$route->get('/agency/addvehicle','agencyaccount@addvehicle');
$route->get('/test','test@home');
$route->run();
?>
