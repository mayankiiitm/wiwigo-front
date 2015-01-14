<?php
date_default_timezone_set('Asia/Kolkata');
define('DB_NAME', 'wiwigo');
define('DB_USER', 'wiwigo');
define('DB_PASSWORD', '');
define('DB_HOST', '10.0.0.230');
define('DRIVER','mysql');
define('AUTH_TABLE', 'auth');
define('DISTANCE_API_KEY','AIzaSyAfG0oqAplPEDV0-JERRDxvBAmDSU1b0ZI');
define('DISTANCE_API_URL','https://maps.googleapis.com/maps/api/distancematrix/json?key='.DISTANCE_API_KEY.'&');
define('ACCESS_TOKEN_EXPIRY', 1);
define('MINIMUM_KM',250);
define('PUBLIC_KEY','12345');
define('PRIVATE_KEY','1234');
?>