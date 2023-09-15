<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>
        .filter-btn {
            height: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body {
            background-color: #F3F5F7;
        }

        .divv {
            background-color: white;
            border-radius: 10px;
        }
        .fav {
            font-weight: 600;
        }
    </style>

    <title>CROSSBORDERS</title>
</head>

<body>
<?php
session_start();
include('NAV.PHP');
// include('CHAT.PHP');
?>
    <div class="container pt-4 pb-4">
        <input type="text" name="" id="" class="form-control" placeholder="SEARCH..." style="width: 100%;">
        <hr>
        <div class="row">
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">BEST MATCH</a>
            </div>
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">BEST RANK</a>
            </div>
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">ACCEPTANCE RATE</a>
            </div>
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">TUITION FEE</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <p class="ml-3 mt-2">COUNTRY</p>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <hr>
                <p class="ml-3">DISCIPLINE</p>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <hr>
                <p class="ml-3">DEGREES</p>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <hr>
                <p class="ml-3">TUITION FEE</p>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
                <input type="checkbox" name="" id="" class="mr-3"><a href="" style="font-size: 17px;">United
                    States</a><br>
            </div>
            <div class="col-lg-9">
                <div class="container-fluid divv">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://cdn.ischoolconnect.com/logo/12061.png" alt="" width="100%">
                        </div>
                        <div class="col-10">
                            <p class="mt-3">Yorkville University</p>
                            <p><i class="fa-solid fa-location-dot mr-3"></i>Toronto, Ontario, Canada</p>

                            <div class="degrees mt-5 p-2 mb-4" style="background-color: #d9cfcf89; border-radius: 10px;">
                                <div class="row">
                                    <div class="col-6">
                                        <p style="font-weight: 700;">Bachelors in Business Administration</p>
                                        <p><i class="fa-solid fa-building-columns mr-2"></i> Main</p>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <p><i class="fa-solid fa-graduation-cap mr-2"></i>Degree</p>
                                            </div>
                                            <div class="col-sm-5">
                                                <p><i class="fa-solid fa-dollar-sign"></i> - </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row mt-5">
                                            <div class="col-lg-7">
                                                <button class="p-2 mt-1 mb-1 fav" style="width: 100%; border-radius: 10px; background-color: transparent; border: 1px solid #908c8c;">
                                                    <div class="row p-0">
                                                        <div class="col-3"><i style="font-size: 18px;" class="fa-regular fa-heart text-center fav-icon"></i></div>
                                                        <div class="col-9">Favorites</div>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="col-lg-5">
                                                <a href="UNIFORM.PHP"><button class="btn btn-info p-2 mt-1 mb-1" style="width: 80%; border-radius: 10px;">Apply</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>