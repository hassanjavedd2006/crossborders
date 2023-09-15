<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .hero {
            height: 23rem;
            /* border: 1px solid black; */
            background-color: #F8F9FC;
        }
        .hero p {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            font-weight: 500;
            font-size: 1.5rem;
        }
        .our-story {
            background-color: #00AFF0;
            height: 15rem;
        }
        .our-story p {
            font-size: 1.5rem;
            color: white;
            text-align: center;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            font-weight: 500;
        }
        .boxes .box1, .box2 {
            background-color: #CCCDCD;
            margin-top: 3.5rem;
            border-radius: 10px;
            height: 20rem;
        }
        .div {
            /* border: solid black 1px; */
            height: 100%;
            transition: 0.2s;
            border-radius: 10px;
        }
        .div img, h3, p {
            top: 35%;
            transform: translateY(-50%);
            position: relative;
            transition: 0.2s;
        }
        .div img {
            margin-bottom: .5rem;
        }
        .div h3 {
            margin-bottom: .5rem;
        }
        .div:hover {
            background-color: #1E304E;
        }
        .div:hover h3 {
            color: #00AFF0;
        }
        .div:hover p {
            color: #00AFF0;
        }
        .core-values {
            margin-top: 5rem;
        }
        .cvv {
            /* border: solid black 1px; */
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
            margin-top: 3rem;
            transition: 0.2s;
        }
        .cvv img {
            padding: 1rem;
            transition: 0.2s;
        }
        .cvv:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }
        .cvv:hover img {
            transform: scale(1.2);
        }
        @media only screen and (min-width: 992px) {
            .f-img {
            top: 51%;
            transform: translateY(-50%);
            position: absolute;
            right: 4rem;
        }
        }
        @media only screen and (max-width: 991px) {
            .f-img {
            /* top: 51%;
            transform: translateY(-50%);
            position: absolute;
            right: 4rem; */
            left: 50%;
            transform: translateX(-50%);
            position: relative;
        }
        }
    </style>
    <title>CROSSBORDERS</title>
  </head>
  <body>
    <?php
    session_start();
    include('NAV.PHP');
    ?>
    <div class="container-fluid hero">
        <p class="text-center">ABOUT US</p>
    </div>
    <div class="container-fluid our-story">
        <p>
        Our approach is simple yet effective - we believe in the power of one-on-one interactions. We take the time to listen and understand the unique aspirations, strengths, and challenges of every student. This personalized approach enables us to tailor our recommendations and services, ensuring that each student receives the best possible guidance and support throughout their journey.
        </p>
    </div>
    <div class="container boxes">
        <div class="row">
            <div class="col-lg-6">
                <div class="container box1 p-0">
                <div class="div p-3">
                <img class="" src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/vision.svg" alt="">
                <h3 class="">OUR VISION</h3>
                <p>We desire to be the most beloved student mobility solution on earth.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
            <div class="container box2 p-0">
                <div class="div p-3">
                <img class="" src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/mission.svg" alt="">
                <h3 class="">Our Mission</h3>
                <p>Making the admissions process globally accessible and hassle-free for every student.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center core-values">CORE VALUES</h3>
    <div class="container">
        <div class="row cv">
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/growth.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>GROWTH</h3>
                            <p>Get things done while having fun</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/entrepreneurial.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Entrepreneurial Mindset</h3>
                            <p>Think out loud and speak out louder!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cv">
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/customer.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Customer satisfaction</h3>
                            <p>Go the extra mile, it's never crowded</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/creativity.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Creativity</h3>
                            <p>Not all answers are found on the internet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cv">
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/idea.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Idea Mindset</h3>
                            <p>Keep dreaming like a child</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/diversity.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Diversity & Inclusion</h3>
                            <p>Diversity brings Uniformity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cv">
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/smart.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Smart Thinking</h3>
                            <p>Know when to hold'em know when to fold'em</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/compassion.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Compassion & Empathy</h3>
                            <p>Try someone else's shoes and know how it feels</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cv">
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/build.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Build the best</h3>
                            <p>What is 'Second Best'? Never heard of it</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row cvv">
                        <div class="col-3">
                        <img src="https://cdn.ischoolconnect.com/iSchoolConnect/b2c/images/respect.svg" alt="">
                        </div>
                        <div class="col-9">
                            <h3>Respect</h3>
                            <p>Knowledge gives power but character gives respect</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <p class="text-center" style="font-size: 2.5rem; margin-top: 3rem;">CROSSBORDERS AI approach</p>
        <p class="text-center" style="width: 50%; left: 50%; transform: translateX(-50%); position: relative; margin-top: -2rem;">At CROSSBORDERS, we aim to help our users to make better, well-informed decisions. In order to do so, we build assistive AI products that tackle problems that our users face in their everyday lives.</p>
    </div>

    <p class="text-center" style="font-size: 1.5rem; margin-top: 5rem; font-weight: 500;">Our Founder Speaks</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <img class="f-img" src="ASSETS/FOUNDER.jpg" alt="" width="200rem" style="border-radius: 50%;">
            </div>
            <div class="col-lg-7">
                <p class="text-center" style="font-weight: bold; color: #00AFF0; margin-top: -2rem;">MUHAMMAD HASSAN JAVED</p>
                <p class="text-center" style="color: grey; margin-top: -1rem; margin-bottom: 2rem;">Founder</p>
                <p class="text-center" style="margin-bottom: 9rem; margin-top: -2rem; width: 70%; left: 50%; transform: translateX(-50%); position: relative;">"When you help educate one person you can change a life, when you help educate thousands, you can change the world. We are on a mission to make education accessible, affordable and uplifting for everyone who deserves it."</p>
            </div>
        </div>
    </div>

    <p class="text-center" style="font-size: 1.5rem; margin-top: 5rem; font-weight: 500;">OUR CORE TEAM MEMBERS</p>

    <div class="container-fluid" style="">
        <div class="row">
            <div class="col-lg-4 p-0">
                <img src="ASSETS/FOUNDER.jpg" width="150rem" alt="" style="border-radius: 50%; left: 50%; transform: translateX(-50%); position: relative;">
                <p class="text-center" style="margin-top: -2rem; font-weight: 500;">MOHAMMAD ANSARI</p>
                <p class="text-center">CO-FOUNDER</p>
            </div>
            <div class="col-lg-4 p-0">
                <img src="ASSETS/FOUNDER.jpg" width="150rem" alt="" style="border-radius: 50%; left: 50%; transform: translateX(-50%); position: relative;">
                <p class="text-center" style="margin-top: -2rem; font-weight: 500;"> WAQAR ALI SHAR</p>
                <p class="text-center">CO-FOUNDER</p>
            </div>
            <div class="col-lg-4 p-0">
                <img src="ASSETS/FOUNDER.jpg" width="150rem" alt="" style="border-radius: 50%; left: 50%; transform: translateX(-50%); position: relative;">
                <p class="text-center" style="margin-top: -2rem; font-weight: 500;">MUHAMMAD BILAL JAVED</p>
                <p class="text-center">CO-FOUNDER</p>
            </div>
        </div>
    </div>
    <?php include('CHAT.PHP'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>