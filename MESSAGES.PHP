<?php

include('CONN.PHP');
session_start();

$chat = $_SESSION['user-chat'];
$qry1 = "SELECT * FROM $chat";
$res1 = mysqli_query($con, $qry1);
// $qry2 = "SELECT * FROM chat1 WHERE WHO = 'ADMIN'";
// $res2 = mysqli_query($con, $qry2);
while($row1 = mysqli_fetch_assoc($res1)) {
    if($row1['WHO'] === 'USER') {
        echo "<p class='pr-2' style='width: 100%; text-align: end; color: white;'>".$row1['CHAT']."</p>";
    }
    else {
        echo "<p class='pl-2' style='width: 100%; text-align: start; color: white;'>".$row1['CHAT']."</p>";
    }
}
?>
