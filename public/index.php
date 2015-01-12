<?php
require_once '../app/init.php';
Auth::request_token();
$route=new Route;
$route->get('/mauth','mauth@request_token');
$route->get('/agency/register','agency@register');
$route->get('/agency/login','agency@login');

$route->get('/test','test@home');
$route->run();
?>
