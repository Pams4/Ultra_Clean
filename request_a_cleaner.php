<?php
//connect to database class
include_once (dirname(__FILE__)).'/./controllers/form_controller.php';

$details = getDetails();

foreach($details as $key => $values){}

if(isset($_GET['id'])){
  $value = getSingleDetail($_GET['id']);
  if(empty($value)){
    return false;
  }
}else{
  
}
?>


<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ultra Clean- Request a Cleaner</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/ultraclean.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/ultraclean.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/ultraclean.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ultraclean.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/ultraclean.png" width="118" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link"  href="services.php?id=<?=$values['id']?>">Services</a></li>
              <li class="nav-item px-2"><a class="nav-link"  href="request_a_cleaner.php?id=<?=$values['id']?>">Request a Cleaner</a></li>
              <li class="nav-item px-2"><a class="nav-link"  href="register_your_company.php?id=<?=$values['id']?>">Register your Company</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="contact.php?id=<?=$values['id']?>">Contact Us</a></li>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="login.php">Sign In</a>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="AdminLogin.php">Login as Admin</a>
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->
        <section class="py-0 bg-secondary">
        <div class="bg-holder opacity-25" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>

    
        <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Request A Cleaner</h5>
                    <p class="text-center medium">Enter the details required</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method = "POST" action = "functions/form_update.php">
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="first_name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Last Name</label>
                      <input type="text" name="last_name" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Phone Number</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">+</span>
                        <input type="number" name="phonenumber" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter you phone number.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter your email!</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Address</label>
                      <input type="text" name="address" class="form-control" id="youreventName" required>
                      <div class="invalid-feedback">Please, enter your current address!</div>
                    </div>

                    <div class="col-12">
                    <label for="Services" class="form-label">Select the service needed</label>
                    <select class="form-select form-select-sm" name = "services" aria-label=".form-select-sm example">
                        <option selected>Choose</option>
                        <option value="1">Basic - Residential Cleaning</option>
                        <option value="2">Basic - Floor Cleaning</option>
                        <option value="3">Basic - Washroom Services</option>
                        <option value="4">Basic - Window Cleaning</option>
                        <option value="5">Premium - Residential Cleaning </option>
                        <option value="5">Premium - Floor Cleaning </option>
                        <option value="5">Premium - Washroom Services </option>
                        <option value="5">Premium - Window Cleaning </option>
                        </select>
                    </div>
                    
                    <div class="col-12">
                        <label for="formFile" class="form-label">Upload Your Reciet as a PDF or Picture</label>
                        <input class="form-control" type="file" name = "file" id="formFile">
                    </div>
                    <div class="col-12">
                        <p class="medium mb-0">Register your company instead? <a  href="register_your_company.php?id=<?=$values['id']?>" >Click Here</a></p>
                      </div>

                    <div class="col-12">
                      <a button class="btn btn-primary w-100" type="submit" name = "submit" >Submit</button></a>
                    </div>
                  </form>

                </div>
              </div>

              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

          <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; UltraClean, 2021</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="" target="_blank">UltraClean</a>
                </p>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>