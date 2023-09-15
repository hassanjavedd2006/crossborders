<?php

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$em = $_POST['em'];
$phn = $_POST['pn'];
$pass = $_POST['pass'];

$name = $fn.' '.$ln;
include('CONN.PHP');

$email_check = "SELECT * FROM user_tbl WHERE email = '$em'";
$res_email = mysqli_query($con, $email_check);
$row = mysqli_fetch_assoc($res_email);
if($row) {
    header('location:SIGNUP.PHP');
} else {
    $qry = "INSERT INTO user_tbl VALUES(NULL, '$name', '$em', '$pass', '$phn', 'OUR_WEB')";
    $res = mysqli_query($con, $qry);
    header('location:SIGNIN.PHP');
}


?>