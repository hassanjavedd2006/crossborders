<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        .sm-cont {
            transition: 0.2s;
            border: 1px solid black;
        }
        .sm-cont:hover {
            background-color: #05C7F2;
            border: 1px solid white;
        }
        .sm-link {
            transition: 0.2s;
        }
        .sm-cont:hover .sm-link {
            color: white;
        }
    </style>
    <title>CROSSBORDERS</title>
  </head>
  <body>
    <?php include('NAV.PHP') ?>
    <div class="container-fluid" style="background-color: #F8F9FC; height: 19rem;">
        <p style="top: 50%; transform: translateY(-50%); position: relative; font-size: 2rem; font-weight: 600; color: #3C4858;" class="text-center">Contact Us</p>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-4" style="border: solid 1px #d7d8da; border-radius: 5px;">
                <form action="">
                    <label style="font-weight: 600; font-size: 1rem;" for="">Full Name<span style="color: red;">*</span></label><br>
                    <input class="form-control" style="background-color: #F5F8FA;" type="text" name="" id=""><br>
                    <label style="font-weight: 600; font-size: 1rem;" for="">Email<span style="color: red;">*</span></label><br>
                    <input class="form-control" style="background-color: #F5F8FA;" type="text" name="" id=""><br>
                    <label style="font-weight: 600; font-size: 1rem;" for="">Phone Number<span style="color: red;">*</span></label><br>
                    <input class="form-control" style="background-color: #F5F8FA;" type="text" name="" id=""><br>
                    <label style="font-weight: 600; font-size: 1rem;" for="">Subject<span style="color: red;">*</span></label><br>
                    <input class="form-control" style="background-color: #F5F8FA;" type="text" name="" id=""><br>
                    <label style="font-weight: 600; font-size: 1rem;" for="">Message<span style="color: red;">*</span></label><br>
                    <textarea class="form-control" style="background-color: #F5F8FA;" name="" id="" cols="30" rows="3"></textarea><br>
                    <button class="mt-3 mb-3 btn btn-primary" style="left: 50%; transform: translateX(-50%); position: relative;">Send Message</button>
                </form>
            </div>
            <div class="col-lg-8">
                <p style="font-size: 1.5rem; font-weight: 400;" class="text-dark">Contact Details</p>
                <p style="font-weight: 400; font-size: 1.1rem;">University application is a complex and often confusing process. Our friendly AI Chatbot can answer most of your questions. Have a question that wasn't answered? Write to us, we're always happy to help!</p>
                <div class="row mt-4">
                    <div class="col-auto" style="display: flex; justify-content: center; align-items: center;">
                        <i style="font-size: 1.9rem;" class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="col-auto">
                        <p class="p-0 m-0" style="font-size: 1.2rem; font-weight: 400;">Email</p>
                        <p class="p-0 m-0" style="color: #05C7F2;">info@ischoolconnect.com</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-auto" style="display: flex; justify-content: center; align-items: center;">
                        <i style="font-size: 1.9rem;" class="fa-solid fa-phone"></i>
                    </div>
                    <div class="col-auto">
                        <p class="p-0 m-0" style="font-size: 1.2rem; font-weight: 400;">Phone</p>
                        <p class="p-0 m-0" style="color: #05C7F2;">0335-2144421</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-auto" style="display: flex; justify-content: center; align-items: center;">
                        <i style="font-size: 1.9rem;" class="fa-solid fa-location-dot"></i>
                        <p class="" style="font-size: 1.2rem; font-weight: 400; padding-left: 2.3rem; top: 40%; transform: translateY(-50%); position: relative;">Location</p>
                    </div>
                    <div class="col-auto">
                        
                        <p class="" style="color: #05C7F2; margin-left: 3.7rem;">Mumbai, India: 504, Quantum Towers, Rambaug Lane, Behind SBI Bank, Off SV Road, Malad West, Mumbai, Maharashtra- 400064<br><br>U.S.A: 33 Boston Post Road,W Suite 600, Marlborough MA, USA - 01752</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-auto sm-cont" style="width: 30px; height: 30px; border-radius: 5px; margin-left: 1rem;">
                        <i class="fa-brands fa-facebook-f sm-link" style="left: 50%; transform: translateX(-45%); position: relative;"></i>
                    </div>
                    <div class="col-auto sm-cont" style="width: 30px; height: 30px; border-radius: 5px; margin-left: 1rem;">
                        <i class="fa-brands fa-instagram sm-link" style="left: 50%; transform: translateX(-45%); position: relative;"></i>
                    </div>
                    <div class="col-auto sm-cont" style="width: 30px; height: 30px; border-radius: 5px; margin-left: 1rem;">
                        <i class="fa-brands fa-linkedin-in sm-link" style="left: 50%; transform: translateX(-45%); position: relative;"></i>
                    </div>
                    <div class="col-auto sm-cont" style="width: 30px; height: 30px; border-radius: 5px; margin-left: 1rem;">
                        <i class="fa-brands fa-youtube sm-link" style="left: 50%; transform: translateX(-45%); position: relative;"></i>
                    </div>
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