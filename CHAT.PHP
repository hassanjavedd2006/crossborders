<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <style>
    #messages::-webkit-scrollbar {
        background-color: #DBF227;
        border-radius: 10px;
    }

    #messages::-webkit-scrollbar:hover {
        background-color: #9FC131;
    }
    </style>
    <title>Document</title>
</head>
<body>
<?php
session_start();
include('NAV.PHP');
include('CONN.PHP');
session_start();
$mac_add = exec('getmac');
$mac_add_without_hyphens =  str_replace(["-", " "], "", $mac_add);
// echo $mac_add_without_hyphens;
$qry1 = "SELECT * FROM chatsystem WHERE MAC = '$mac_add_without_hyphens'";
$res = mysqli_query($con, $qry1);
$row = mysqli_fetch_assoc($res);
if($row) {
    // echo 'ALREADY INSERTED ';
    $chatid = 'chat'.$row['ID'];
    $_SESSION['user-chat'] = $chatid;
} else {
    $qry2 = "INSERT INTO chatsystem VALUES(NULL, '$mac_add_without_hyphens', NULL)";
    $res2 = mysqli_query($con, $qry2);
    $qry3 = "SELECT * FROM chatsystem WHERE MAC = '$mac_add_without_hyphens'";
    $res3 = mysqli_query($con, $qry3);
    $row = mysqli_fetch_assoc($res3);
    $chatid = 'chat'.$row['ID'];

    $_SESSION['user-chat'] = $chatid;
    $qry4 = "UPDATE chatsystem SET CHAT = '$chatid' WHERE MAC = '$mac_add_without_hyphens'";
    $res4 = mysqli_query($con, $qry4);
    $qry5 = "CREATE TABLE $chatid
    (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        CHAT VARCHAR(1000),
        WHO VARCHAR(100) NOT NULL
    )";
    $res5 = mysqli_query($con, $qry5);
    // echo "ID CREATED";
}

?>
<script>
        function refreshDiv() {
            // Make an AJAX request to the server to get the updated data
            $.ajax({
                url: 'MESSAGES.PHP', // Replace with your server-side script
                method: 'GET',
                success: function(response) {
                    // Update the content of the div with the updated data
                    $('#messages').html(response);
                }
            });
        }

        // Call the refreshDiv function every few seconds
        setInterval(refreshDiv, 10); 

        setTimeout(() => {
            var mydiv = $("#messages");
            mydiv.scrollTop(mydiv.prop("scrollHeight"));
        }, 100);
    </script>

<div class="container-fluid" style="height: 89vh; width: 100%; border: solid #005C53 1px; background-color: #005C53;">
    <div class="container p-3" style="height: 90%; overflow-y: auto;" id="messages">
    </div>
    <form id="myForm" action="SENDMESSAGE.PHP" method="post">
    <div class="row" style="position: relative;">
        <div class="col-11">
            <input type="text" name="msg" id="chatInp" class="form-control" style="height: 40px; border-radius: 20px; border: none;">
        </div>
        <div class="col-1">
            <button id="sendBtn" style="background-color: #DBF227; position: relative; left: 40%; transform: translateX(-50%); border-radius: 50%; width: 40px; height: 40px; border: none;"><i class="fa-solid fa-paper-plane" style="color: #ffffff;"></i></button>
        </div>
    </div>
    </form>
</div>



<script>
$(document).ready(function() {
    $("#myForm").submit(function(e) {
        
        e.preventDefault(); // Prevent the form from normal submission

        // Serialize form data
        var formData = $(this).serialize();
        setTimeout(() => {
            var mydiv = $("#messages");
            mydiv.scrollTop(mydiv.prop("scrollHeight"));
        }, 100);

        
        // AJAX request
        $.ajax({
            type: "POST",
            url: $(this).attr("action"), // URL from form action attribute
            data: formData
        });
        let chatInp = document.querySelector('#chatInp');
        chatInp.value = "";  
    });
    
});

</script>




    
</body>
</html>