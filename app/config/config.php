<?php
date_default_timezone_set('Asia/Kolkata');
define('DB_NAME', 'wiwigo');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DRIVER','mysql');
define('AUTH_TABLE', 'auth');
define('DISTANCE_API_KEY','AIzaSyCaktZO2TZamu3ZC44TlypPAwxNmMyLTU8');
define('DISTANCE_API_URL','https://maps.googleapis.com/maps/api/distancematrix/json?key='.DISTANCE_API_KEY.'&');
define('ACCESS_TOKEN_EXPIRY', 1);
define('MINIMUM_KM',250);
define('PUBLIC_KEY','12345');
define('PRIVATE_KEY','1234');
define('API_URL', 'http://api.wiwigo.com');
define('WEB_URL','http://wiwigo.com');
?>