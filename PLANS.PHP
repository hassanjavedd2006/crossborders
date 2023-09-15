<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        .plans-div {
            transition: 0.2s;
            margin-bottom: 5rem;
        }
        .plans-div:hover {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(1.02);
        }
        .plan-div-heading {
            transition: 0.2s;
            font-size: 1rem;
            font-weight: 600;
        }
        .plans-div:hover .plan-div-heading {
            color: #05C7F2;
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
    <div class="container-fluid" style="background-color: #F8F9FC; height: 19rem;">
        <p style="top: 50%; transform: translateY(-50%); position: relative; font-size: 2rem; font-weight: 600; color: #3C4858;" class="text-center">Plans & Pricing</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="container plans-div" style="border: 1px solid #bdbdbe; border-radius: 10px; width: 80%; margin-top: 2rem;">
                    <p class="text-center pb-2 pt-4 plan-div-heading">BASIC</p>
                    <hr>
                    <p style="font-size: 1.6rem;" class="text-center">FREE</p>
                    <button class="btn btn-primary mb-2" style="left: 50%; transform: translateX(-50%); position: relative;">REGISTER</button>
                    <hr>
                    <p style="font-weight: 600;">What's included:</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  No Assisted Recommendations</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Initial Counselling</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Essay and SOP Grading Tool</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Visa/MBA Interview Tool</p>
                    <p class="mt-5 text-center">Show all features   <i class="fa-solid fa-arrow-right"></i></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container plans-div" style="border: 1px solid #bdbdbe; border-radius: 10px; width: 80%; margin-top: 2rem;">
                    <p class="text-center pb-2 pt-4 plan-div-heading">Essential</p>
                    <hr>
                    <p style="font-size: 1.6rem;" class="text-center">100.00$</p>
                    <a href="checkout.php?id=100"><button class="btn btn-primary mb-2" style="left: 50%; transform: translateX(-50%); position: relative;">BUY NOW!</button></a>
                    <hr>
                    <p style="font-weight: 600;">What's included:</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  10 Assisted Recommendations</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Dedicated Counselling Mentor</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Basic Essay and SOP Grading Tool</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Basic Visa/MBA Interview Tool</p>
                    <p class="mt-5 text-center">Show all features   <i class="fa-solid fa-arrow-right"></i></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="container plans-div" style="border: 1px solid #bdbdbe; border-radius: 10px; width: 80%; margin-top: 2rem;">
                    <p class="text-center pb-2 pt-4 plan-div-heading">Premium</p>
                    <hr>
                    <p style="font-size: 1.6rem;" class="text-center">180.00$</p>
                    <button class="btn btn-primary mb-2" style="left: 50%; transform: translateX(-50%); position: relative;">BUY NOW!</button>
                    <hr>
                    <p style="font-weight: 600;">What's included:</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  10 Assisted Recommendations</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Dedicated Counselling Mentor</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Basic Essay and SOP Grading Tool</p>
                    <p><i class="fa-solid fa-arrow-right"></i>  Basic Visa/MBA Interview Tool</p>
                    <p class="mt-5 text-center">Show all features   <i class="fa-solid fa-arrow-right"></i></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #F8F9FC;">
        <p class="text-center p-4" style="font-size: 1.9rem; font-weight: 600;">Frequently Asked Questions</p>
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-lg-6">
                    <p style="font-size: 1.3rem; font-weight: 400; color: #424858;">What payment methods are available? Is the EMI option available for payment?</p>
                    <p style="color: #8494A9; font-size: 1.1rem;">You can pay using any credit or debit card issued by all major banks. Yes, we offer EMI payment options to our students, of which the No Cost EMI option is available for 3 and 6-month payments. You can avail the EMI payment option using any credit or debit card. You can also use our payment partners such as EarlySalary and Eduvanz for EMI benefits.</p>
                </div>
                <div class="col-lg-6">
                    <p style="font-size: 1.3rem; font-weight: 400; color: #424858;">What is the difference between Basic and Advanced Essay & SOP Grading Tool?</p>
                    <p style="color: #8494A9; font-size: 1.1rem;">While both the Basic and Advanced Essay & SOP Grading Tools assist you in improving your essay, the key distinction is that the Basic one only allows you to have your essay reviewed five times, whereas the Advanced one allows you to edit your essay an unlimited number of times and receive multiple reviews from your mentor.</p>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-lg-6">
                    <p style="font-size: 1.3rem; font-weight: 400; color: #424858;">What payment methods are available? Is the EMI option available for payment?</p>
                    <p style="color: #8494A9; font-size: 1.1rem;">You can pay using any credit or debit card issued by all major banks. Yes, we offer EMI payment options to our students, of which the No Cost EMI option is available for 3 and 6-month payments. You can avail the EMI payment option using any credit or debit card. You can also use our payment partners such as EarlySalary and Eduvanz for EMI benefits.</p>
                </div>
                <div class="col-lg-6">
                    <p style="font-size: 1.3rem; font-weight: 400; color: #424858;">What is the difference between Basic and Advanced Essay & SOP Grading Tool?</p>
                    <p style="color: #8494A9; font-size: 1.1rem;">While both the Basic and Advanced Essay & SOP Grading Tools assist you in improving your essay, the key distinction is that the Basic one only allows you to have your essay reviewed five times, whereas the Advanced one allows you to edit your essay an unlimited number of times and receive multiple reviews from your mentor.</p>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-lg-6">
                    <p style="font-size: 1.3rem; font-weight: 400; color: #424858;">What payment methods are available? Is the EMI option available for payment?</p>
                    <p style="color: #8494A9; font-size: 1.1rem;">You can pay using any credit or debit card issued by all major banks. Yes, we offer EMI payment options to our students, of which the No Cost EMI option is available for 3 and 6-month payments. You can avail the EMI payment option using any credit or debit card. You can also use our payment partners such as EarlySalary and Eduvanz for EMI benefits.</p>
                </div>
                <div class="col-lg-6">
                    <p style="font-size: 1.3rem; font-weight: 400; color: #424858;">What is the difference between Basic and Advanced Essay & SOP Grading Tool?</p>
                    <p style="color: #8494A9; font-size: 1.1rem;">While both the Basic and Advanced Essay & SOP Grading Tools assist you in improving your essay, the key distinction is that the Basic one only allows you to have your essay reviewed five times, whereas the Advanced one allows you to edit your essay an unlimited number of times and receive multiple reviews from your mentor.</p>
                </div>
            </div>
        </div>
        <p class="text-center mt-5" style="font-size: 1.5rem; font-weight: 600;">Have more questions about our plans?</p>
        <button style="left: 50%; transform: translateX(-50%); position: relative;" class="btn btn-primary mt-3 mb-5">Contact Us</button>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>