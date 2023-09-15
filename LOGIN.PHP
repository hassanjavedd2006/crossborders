<?php

include('CONN.PHP');
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];

$qry1 = "SELECT * FROM user_tbl WHERE email = '$email' AND password = '$pass'";
$res1 = mysqli_query($con, $qry1);
$row = mysqli_fetch_assoc($res1);
if($row) {
    $_SESSION['name'] = $row['name'];
    echo $_SESSION['name'];
    // header('location:INDEX.PHP');
} else {
    header('location:SIGNIN.PHP');
}


?>