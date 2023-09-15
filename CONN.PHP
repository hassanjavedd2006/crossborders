<?php

$dbuser = 'root';
$dbhost = 'localhost';

$con = mysqli_connect($dbhost, $dbuser);

$db = mysqli_select_db($con, 'crossborders');

?>