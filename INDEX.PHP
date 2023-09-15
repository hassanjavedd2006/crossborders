<!DOCTYPE html>
<html lang="en">

<head>
  <title>CROSSBORDERS</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css" />

  <style>
    body {
      margin: 0;
      padding: 0;
      font-size: 3vh;
      color: #757D88;

    }

    a {
      text-decoration: none;
    }

    a:hover {
      color: rgb(176, 176, 176);
    }

    .hero {
      min-height: 70vh;
      height: 100%;
      background-image: url(assets/img/capture.png);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }


    .txt-div {
      margin-top: 15vh;
    }

    .dflex {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .searchbtn {
      z-index: 1;
    }

    .btns {
      position: relative;
      z-index: 1;
      background-color: white;
      color: rgb(123, 122, 122);
      border: 1px solid rgba(154, 149, 149, 0.77);
      border-radius: 15px;
      padding: 0px, 0px;
    }

    .btns:hover {
      color: black;
      border-color: lightskyblue;
    }

    .regbtn {
    border-color: rgb(57, 166, 238);
    color: rgb(57, 166, 238);
  }

    .regbtn:hover {
      background-color: blue;
      color: wheat;
    }

    .card {
      box-shadow: 3px 3px 5px aqua;
    }

   
  </style>
</head>

<body>
  <?php
  session_start();
  include('NAV.php');
  ?>
  <div class="hero">
    <div class="image-with-gradient">
      <div class="container">
        <div class="txt-div text-center">
          <h1 class="display-7 dflex">
            Find and apply to your dream study abroad destination
          </h1>
          <br />
          <h3 class="display-7 dflex">
            IGNITE THE BORDERS... FIRE YOUR CAREER 🔥🔥
          </h3>
        </div>
        <div class="search mt-5">
          <form action="">
            <div class="row dflex">
              <div class="col-6">
                <input type="text" class="form-control searchbar" placeholder="Search your field or University" style="border: 1px solid grey"/>
              </div>
              <div class="col-1">
                <button class="searchbtn btn btn-primary" type="submit">
                  search
                </button>
              </div>
            </div>
            <div class="container">
              <div class="buttons text-center mt-3">
                <a href="#" class="m-1 btn btns">Computer Science</a>
                <a href="#" class="btn btns m-1">MBA</a>
                <a href="#" class="btn btns m-1">Mechanical Engineering</a>
                <a href="#" class="btn btns m-1">Data Analysis</a>
                <a href="#" class="btn btns m-1">BOSTON</a>
                <a href="#" class="btn btns m-1">TORONTO</a>
                <a href="#" class="btn btns m-1">NEWYORK</a>
                <a href="#" class="btn btns m-1">LONDON</a>

                <a href="#" class="btn btns m-1">Harvard University</a>
                <a href="#" class="btn btns m-1">University Of Texas Dallas</a>
                <a href="#" class="btn btns m-1">University Of London</a>
                <a href="#" class="btn btns m-1">University Of Toronto</a>
              </div>
            </div>
          </form>
          <br /><br />
        </div>
      </div>
    </div>
  </div>
  <div class="container banner1 my-4">
    <a href=""><img src="assets/img/banner1.PNG" alt="" width="100%" /></a>
    <br /><br />
  </div>
  <div class="container section2">
    <div class="text-center">
      <div class="container txt bg-info p-5" style="border-radius: 10px">
        <h1 class="diplay-3">
          Start your <span class="text-primary"> Study Abroad </span> journey
          with us
        </h1>
      </div>
      <div class="container mt-3">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/pexels-sec3-2.jpg" alt="" width="100%" />
          </div>
          <div class="col-lg-6">
            <h4>
              CrossBorders is an emerging technology platform that speeds up
              the process of applying to colleges and courses abroad and helps
              you get into the best universities in the world and ignite your
              careers worldwide
            </h4>
            <div class="container mt-5">
              <div class="row my-2">
                <div class="col-1">
                  <img src="assets/img/checked.png" alt="checked" />
                </div>
                <div class="col-11" style="text-align: left; color: #414345">
                  <h5>Simple, hassle-free online platform</h5>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-1">
                  <img src="assets/img/checked.png" alt="checked" />
                </div>
                <div class="col-11" style="text-align: left; color: #414345">
                  <h5>Certified Professionals</h5>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-1">
                  <img src="assets/img/checked.png" alt="checked" />
                </div>
                <div class="col-11" style="text-align: left; color: #414345">
                  <h5>Online sessions with Counselors</h5>
                </div>
              </div>
              <a href="#" class="btn btn-primary mx-3 my-0 px-3">REGISTER</a>
              <a href="#" class="btn mx-3 my-0 px-4 regbtn fw-bold">BOOK AN APPOINTMENT NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container sec4 mt-5 text-center">
    <div class="container txt bg-info p-5" style="border-radius: 10px">
      <h1 class="diplay-3">TOP STUDY ABROAD UNIVERSITIES</h1>
    </div>
    <div class="row mt-5">
      <div class="col-lg-1"></div>
      <div class="col-lg-2">
        <div class="card text-center ">
          <img class="m-3" src="assets/img/harvard.png" alt="" width="80%" />
          <h6 style="font-size: 17px;">HARVARD University</h6>
          <h6>Cambridge,USA</h6>
          <a href="" style="margin-left: 10%;" class="mb-2 w-75 btn btn-primary">See Details</a>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="card text-center ">
          <img class="m-3" src="assets/img/oxford.png" alt="" width="80%" />
          <h6 style="font-size: 17px;">HARVARD University</h6>
          <h6>Cambridge,USA</h6>
          <a href="" style="margin-left: 10%;" class="mb-2 w-75 btn btn-primary">See Details</a>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="card text-center ">
          <img class="m-3" src="assets/img/stanford.png" alt="" width="80%" />
          <h6 style="font-size: 17px;">HARVARD University</h6>
          <h6>Cambridge,USA</h6>
          <a href="" style="margin-left: 10%;" class="mb-2 w-75 btn btn-primary">See Details</a>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="card text-center ">
          <img class="m-3" src="assets/img/toronto.png" alt="" width="80%" />
          <h6 style="font-size: 17px;">HARVARD University</h6>
          <h6>Cambridge,USA</h6>
          <a href="" style="margin-left: 10%;" class="mb-2 w-75 btn btn-primary">See Details</a>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="card text-center ">
          <img class="m-3" src="assets/img/cambridge.png" alt="" width="80%" />
          <h6 style="font-size: 17px;">HARVARD University</h6>
          <h6>Cambridge,USA</h6>
          <a href="" style="margin-left: 10%;" class="mb-2 w-75 btn btn-primary">See Details</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container sec5 my-5">
    <div class=" text-center  text-light bg-info p-5" style="border-radius: 10px">
      <h3 class="diplay-4">Start your journey with CrossBorders </h3>
      <h6>Need help with your study abroad applications...! </h6>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Example@email.com" />
        <button class="btn btn-primary" type="button">Connect</button>
      </form>
    </div>
  </div>
  
  <?PHP INCLUDE('FOOTER.PHP') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html