<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .inp {
            height: 3.3rem;
            margin-bottom: 2rem;
        }
        @media only screen and (max-width: 991px) {
            .nfm {
                display: none;
            }
        }
    </style>
    <title>CROSSBORDERS</title>
  </head>
  <body>
  <?php
  include('CONN.PHP');
  include('NAV.PHP');
  ?>
<?php

//index.php

//Include Configuration File
include('CONFIGFORSIGNUP.PHP');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];




  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'" style="text-decoration: none;">
 <div class="row p-0">
   <div class="col-2"><img src="https://cdn.ischoolconnect.com/common-files/google.svg" alt="" width="60%" style="top: 50%; transform: translateY(-50%); position: relative;"></div>
   <div class="col-10"><p class="text-center" style="font-weight: 500; top: 50%; transform: translateY(-50%); position: relative; font-size: 1rem;">SIGNUP WITH GOOGLE</p></div>
 </div>
 </a>';
}
?>
<?php
if($login_button == '')
{
  $email = $_SESSION['user_email_address'];
  $qry1 = "SELECT * FROM user_tbl WHERE email = '$email'";
  $res1 = mysqli_query($con, $qry1);
  $row1 = mysqli_fetch_assoc($res1);
  if($row1) {
    $_SESSION['name'] = $row1['name'];
    header('location:INDEX.PHP');
  } else {
    $name = $_SESSION['user_first_name'].' '.$_SESSION['user_last_name'];
    $email = $_SESSION['user_email_address'];
    $qry2 = "INSERT INTO user_tbl VALUES(NULL, '$name', '$email', NULL, NULL, 'GOOGLE')";
    $res2 = mysqli_query($con, $qry2);
    $qry3 = "SELECT * FROM user_tbl WHERE email = '$email'";
    $res3 = mysqli_query($con, $res3);
    $row2 = mysqli_fetch_assoc($res3);
    $_SESSION['name'] = $row2['name'];
    header('location:INDEX.PHP');
  }
  }
else
{
// echo $login_button;
}
?>
<div class="container-fluid">
        <div class="row p-0" style="height: 100vh;">
            <div class="col-lg-3 p-0 nfm" style="background-color: #EEF6F9;">
              <p class="text-center" style="font-size: 25px; font-weight: 700; margin-top: 5rem; color: #00AFF0;">CROSSBORDERS</p>
              <p class="text-center" style="font-weight: bold; font-size: 20px; margin-top: 4.5rem; letter-spacing: 1px; color: #00AFF0;">All-in-one University<br>Admissions Platform</p>

              <div class="container">
                <img src="https://cdn.ischoolconnect.com/accounts/2fc52ed3-b5f8-4ddb-843c-3d7c7917f63d/login-hero.png" alt="" width="75%" style="left: 50%; transform: translateX(-50%); position: relative; margin-top: 3rem;">
              </div>
            </div>
            <div class="col-lg-9 p-0">
              <div class="container" style="width: 30rem;">
                <h4 class="mt-3">Sign up</h4>
                <div class="row">
                  <div class="col-12">
                    <button class="mt-3" style="width: 100%; border-radius: 10px; border: #DDE2E7 solid 1px; background-color: transparent;">
                    <?php echo $login_button; ?>
                    </button>
                  </div>
                </div>

                <p class="or text-center mt-3">OR</p>
                <form action="REGISTER.PHP" method="post">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="fn" id="" class="form-control inp" placeholder="FIRST NAME *">
                        </div>
                        <div class="col-6">
                            <input type="text" name="ln" id="" class="form-control inp" placeholder="LAST NAME *">
                        </div>
                    </div>
                    <input type="text" name="em" id="" class="form-control inp" placeholder="Email *">
                    <input type="text" name="pn" id="" class="form-control inp" placeholder="Phone Number *">
                    <input type="password" name="pass" id="" class="form-control inp" placeholder="Password *">

                    <button class="btn btn-info">CREATE ACCOUNT</button>
                </form>
                <p style="font-weight: 500; font-size: 17px;" class="mt-5">ALREADY A MEMBER? <a href="SIGNIN.PHP">LOGIN</a></p>


              </div>
            </div>
        </div>
    </div>   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>