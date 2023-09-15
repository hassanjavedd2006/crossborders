
    <style>
        nav {
            height: 4.5rem;
            /* border: solid 1px black; */
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }
        .logo {
            color: blue;
            text-decoration: none;
            font-size: 2rem;
            /* border: solid black 1px; */
            padding: 0;
            height: 100%;
        }
        .logo p {
            height: 100%;
            /* border: solid black 1px; */
            /* position: absolute; */
            /* top: 50%;
            transform: translateY(-50%); */
            padding: 0;
            color: #00AFF0;
            font-weight: 600;
        }
        .nav-links {
            width: 100%;
            display: flex;
            justify-content: end;
            /* border: solid black 1px; */
        }
        .nav-links li a {
            margin-left: 1rem;
            font-weight: 500;
        }
        .register-btn {
            background-color: #00AFF0;
        }
        .del-btn {
          background-color: red;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand logo" href="index.php"><p>CROSSBORDERS</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav nav-links">
      <li class="nav-item">
        <a class="nav-link" href="INDEX.PHP" style="font-size: 1rem;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PLANS.PHP" style="font-size: 1rem;">Plans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="UNIVERSITY.PHP" style="font-size: 1rem;">Universities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="JOBPORTAL.PHP" style="font-size: 1rem;">Job Portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ABOUTUS.PHP" style="font-size: 1rem;">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CONTACTUS.PHP" style="font-size: 1rem;">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CHAT.PHP" style="font-size: 1rem;">Chat Support</a>
      </li>
      <?php
      // session_start();
      error_reporting(0);
      $name = $_SESSION['name'];
      if($name == "") {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="SIGNIN.PHP" style="font-size: 1rem;">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-primary register-btn" href="SIGNUP.PHP" style="width: 6rem; height: 2.7rem; font-size: 1rem;">REGISTER</a>
      </li>
      <?php
      } else {
      ?>
      <li class="nav-item">
      <a style="" class="nav-link" href="#" style="font-size: 1rem;">Hi! <?php echo $name ?></a>
      </li>
      <li class="nav-item">
      <a class="nav-link btn btn-danger text-light del-btn" href="LOGOUT.PHP" style="width: 6rem; height: 2.7rem; font-size: 1rem;">LOGOUT</a>
      </li>
      <?php
      }
      ?>
      
    </ul>
  </div>
</nav>