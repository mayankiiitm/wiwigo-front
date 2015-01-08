<?php
require_once '../app/init.php';
$route=new Route;

$route->get('/agency/register','agency@register');

$route->run();
?>
