<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '48095lh');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'Flowershop');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MYSQL: ' .
mysqli_connect_error());
?>
