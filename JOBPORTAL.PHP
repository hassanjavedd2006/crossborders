<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        .filter-btn {
            height: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .job-cont {
            transition: 0.2s;
        }

        .job-cont:hover {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(1.01);
        }
    </style>
    <title>CROSSBORDERS</title>
</head>

<body>
<?php
session_start();
include('NAV.PHP');

?>
    <div class="container mt-4">
        <input type="text" name="" id="" class="form-control" placeholder="SEARCH..." style="width: 100%;">
        <hr>
        <div class="row">
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">HIGHEST PAYING</a>
            </div>
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">LOWEST PAYING</a>
            </div>
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">ON-SITE</a>
            </div>
            <div class="col-auto">
                <a href="" class="btn btn-info filter-btn">REMOTE</a>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row mt-3 job-cont" style="border: 1px solid rgb(164, 156, 156); border-radius: 10px;"
                data-toggle="modal" data-target=".bd-example-modal-lg">
                <div class="col-2">
                    <img src="https://media.licdn.com/dms/image/C560BAQGCytE0eOCDmA/company-logo_100_100/0/1616503257496?e=1700697600&v=beta&t=pkG5OExTlyH50sfK89T19eB6cvVNFy53tI4DjrqNKgE"
                        alt="" width="100%">
                </div>
                <div class="col-10"><br>
                    <p>COLLEGE MANAGER - MARDAN residents only</p>
                    <p>MM ACADEMY mardan</p>
                    <p>Mardān, Khyber Pakhtunkhwa, Pakistan (On-site)</p>
                </div>
            </div>

            
            <div class="row mt-3 job-cont" style="border: 1px solid rgb(164, 156, 156); border-radius: 10px;">
                <div class="col-2">
                    <img src="https://media.licdn.com/dms/image/C560BAQEx9D20usgOAg/company-logo_100_100/0/1587619609338?e=1700697600&v=beta&t=huiULaZaYhsaqYzMT5recj2pQWx5dsiM50sXZpIcvxk"
                        alt="" width="100%">
                </div>
                <div class="col-10"><br>
                    <p>Senior Firmware Engineer</p>
                    <p>Cielo WiGle Inc.</p>
                    <p>Islamabad, Islāmābād, Pakistan (On-site)</p>
                </div>
            </div>
            <div class="row mt-3 job-cont" style="border: 1px solid rgb(164, 156, 156); border-radius: 10px;">
                <div class="col-2">
                    <img src="https://media.licdn.com/dms/image/C560BAQG1ZWonIb9lnw/company-logo_100_100/0/1562014254123?e=1700697600&v=beta&t=STCqfjrdy3w4HO93U_3ivNKT3ny3nS6640Wu3e99DJE"
                        alt="" width="100%">
                </div>
                <div class="col-10"><br>
                    <p>Software Engineer - Front End</p>
                    <p>Wave HQ</p>
                    <p>Toronto, ON (Remote)</p>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <p class="ml-5 mt-4">Software Engineer - Front End</p>
                <p class="ml-5 mt-2">Wave HQ, Toronto, ON (Remote), 2 months ago · 846 applicants</p>
                <p class="ml-5 mt-2"><i class="fa-solid fa-briefcase mr-3"></i>Full-time</p>
                <p class="ml-5 mt-2 mb-5"><i class="fa-regular fa-building mr-3"></i>201-500 employees · Software Development</p>
                <a style="left: 50%; transform: translateX(-50%); position: relative; width: 10rem;" href="JOB_FORM.PHP" class="btn btn-primary">APPLY</a>
                <p class="pl-5 pr-5 p-3 pb-2" style="font-size: 1.3rem;">About the job:</p>
                <p class="pl-5 pr-5" style="font-size: 18px;">We believe small businesses are at the heart of our communities, and championing them is worth
                    fighting for. We empower small business owners to manage their finances fearlessly, by offering the
                    simplest, all-in-one financial management solution they can't live without.
                    <br>
                    Working at Wave:


                    Work From Where You Work Best: We will always have a welcoming, energizing, and world-class office
                    (in Toronto) with a space for you. Or, if you’re more comfortable working from home, the choice is
                    yours
                    We Care About Future You: You will stretch yourself and you will grow at Wave. You will also be
                    supported on this journey with diverse learning experiences, educational allowances, mentorship, and
                    so much more
                    We Support the Full You: We make a serious investment in your health & wellness. When we think about
                    benefits we think about body, mind, & soul and we take this stuff very seriously.
                    We Take Care of the Fundamentals: Fair compensation, all the office perks you’d want, and the
                    various goodies you’d expect from a growing tech company. This is the obvious stuff, but we don’t
                    want you to think we forgot!</p>
                    <div class="container mb-4" style="border: 1px solid black; border-radius: 10px; width: 90%;">
                        <p style="font-size: 18px;">About The Company</p>
                        <div class="row">
                            <div class="col-2">
                                <img src="https://media.licdn.com/dms/image/C560BAQG1ZWonIb9lnw/company-logo_100_100/0/1562014254123?e=1700697600&v=beta&t=STCqfjrdy3w4HO93U_3ivNKT3ny3nS6640Wu3e99DJE" alt="" width="100%">
                            </div>
                            <div class="col-auto">
                                <br>
                                <p>Wave HQ</p>
                                <p>12,375 Follower</p>
                            </div>
                            <div class="col-7">
                                <button style="position: relative; float: right; top: 50%; transform: translateY(-50%);" class="btn btn-primary">View Profile</button>
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