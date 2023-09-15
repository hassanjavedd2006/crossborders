<?php

include('CONN.PHP');

session_start();

$uid = $_SESSION['id'];

$filename = $_FILES['cv']['name'];
$tempname = $_FILES['cv']['tmp_name'];
$folder = "UPLOADS/".$filename;

$msg = $_POST['msgg'];

$qry = "INSERT INTO applicants VALUES(NULL, '$uid', NULL, NULL, '$msg', '$filename')";

move_uploaded_file($tempname, $folder);

header('location:JOBPORTAL.PHP');

?>