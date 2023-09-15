<?php
include('CONN.PHP');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <style>
      
      input {
    width: 70%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    border-left: solid black 1px;
    border-radius: 5px;
  }
  .label {
    margin-left: 15%;
  }
      .inp {
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0px;
      }
      p {
        font-weight: 500;
      }
    </style>
    <title>CoviCure</title>
  </head>
  <body>
    <?php
    // session_start();
    include('NAV.PHP')
    ?>
    <div class="container mt-5">
      <form action="APP_SUBMIT.PHP" method="POST" onsubmit="return valForm()" enctype="multipart/form-data">
        <h5>CONTACT INFORMATION</h5>
        <input
          type="text"
          class="form-control inp"
          placeholder="E-MAIL"
          name="email"
          id="email"
        />
        <p class="text-danger" id="val-email" style="position: absolute;"></p>
        <h5 class="mt-5">PATIENT DETAILS</h5>
        <div class="row mb-4">
          <div class="col">
            <input
              type="text"
              class="form-control inp"
              placeholder="First Name"
              name="fname"
              id="fname"
            />
            <p class="text-danger" id="val-fname" style="position: absolute;"></p>
          </div>
          <div class="col">
            <input
              type="text"
              class="form-control inp"
              placeholder="Last Name"
              name="lname"
              id="lname"
            />
            <p class="text-danger" id="val-lname" style="position: absolute;"></p>
          </div>
        </div>
        <div class="">
          <input
              type="text"
              class="form-control inp  mb-0"
              placeholder="Address"
              name="add"
              id="add"
            />
            <p class="text-danger p-0 m-0" id="val-add" style="position: relative; visibility: hidden;">0</p>
        </div>
        <div class="row  mb-4">
          <div class="col-2">
          <label class="custom-file-upload">
        <input type="file" name="cv">
        UPLOAD CV
    </label>
    <style>
        /* Hide the default file input button */
        input[type="file"] {
            display: none;
        }

        /* Style the custom button to look like a regular button */
        .custom-file-upload {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        /* Style the label to be clickable */
        label {
            cursor: pointer;
        }
    </style>
        </div>
        <div class="col-10">
        <input
              type="text"
              class="form-control inp"
              name="phone"
              placeholder="Phone"
              id="phone"
            />
            <p class="text-danger" id="val-phone" style="position: absolute;"></p>
        </div>
        <div class="container">
        <h5 class="mt-5 text-uppercase">your message here</h5>
          <textarea name="msgg" id="" cols="80" rows="5" ></textarea>
        </div>
        <button class="mt-5 p-2 mb-4">SUBMIT APPLICATION</button>
        <style>
          button {
            width: 250px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 30px;
            background-color: transparent;
            border: solid #D6D7D9 2px;
            font-size: larger;
            color: #0057B7;
            font-weight: 700;
            transition: 0.3s;
          }
          button:hover {
            border: solid #0057B7 2px;
          }
        </style>
        </style>
      </form>
      <script>
        let email = document.getElementById('email');
        let fname = document.getElementById('fname');
        let lname = document.getElementById('lname');
        let address = document.getElementById('add');
        let phone = document.getElementById('phone');

        let err_txt_email = document.getElementById('val-email');
        let err_txt_fname = document.getElementById('val-fname');
        let err_txt_lname = document.getElementById('val-lname');
        let err_txt_add = document.getElementById('val-add');
        let err_txt_phone = document.getElementById('val-phone');

        let regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


        email.addEventListener('keydown', () => {
          valEmail();
        });
        let valEmail = () => {
          if(regex.test(email.value)) {
            err_txt_email.innerHTML = "";
            return true;
          } else {
            err_txt_email.innerHTML = "*example@example.com*";
            return false;
          }
        }

        fname.addEventListener('keydown', () => {
          valFname();
        });
        let valFname = () => {
          if(fname.value.length < 2) {
            err_txt_fname.innerHTML = "*FIRST NAME CAN'T BE LESS THEN 3*";
            return false;
          } else {
            err_txt_fname.innerHTML = "";
            return true;
          }
        }

        lname.addEventListener('keydown', () => {
          valLname();
        });

        let valLname = () => {
          if(lname.value.length < 2) {
            err_txt_lname.innerHTML = "*LAST NAME CAN'T BE LESS THEN 3";
            return false;
          } else {
            err_txt_lname.innerHTML = "";
            return true;
          }
        }

        address.addEventListener('keydown', () => {
          valAdd();
        });

        let valAdd = () => {
          if(address.value.length < 10) {
            err_txt_add.style.visibility = 'visible';
            err_txt_add.innerHTML = "*ENTER A VALID ADDRESS*";
            return false;
          } else {
            err_txt_add.style.visibility = 'hidden';
            return true;
          }
        }

        phone.addEventListener('keydown', () => {
          valPhone();
        });
        
        let valPhone = () => {
          if(phone.value.length < 9) {
            err_txt_phone.innerHTML = "*EXAMPLE: 03352544425*";
            return false;
          } else {
            err_txt_phone.innerHTML = "";
            return true;
          }
        }

        let valForm = () => {
          if(valEmail() == true && valFname() == true && valLname() == true && valAdd() == true && valPhone() == true)
          {
            return true;
          } else {
            return false;
          }
        }


      </script>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>