<?php
include('CONN.PHP');
$msg = $_POST['msg'];
session_start();

$chat = $_SESSION['user-chat'];
$qry = "INSERT INTO $chat VALUES(NULL, '$msg', 'USER')";
$res = mysqli_query($con, $qry);

?>