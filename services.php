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

    <title>Ultra Clean- Services</title>


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
              
              <li class="nav-item px-2"><a class="nav-link" href="services.php?id=<?=$values['id']?>">Services</a></li>
              <li class="nav-item px-2"><a class="nav-link"  href="request_a_cleaner.php?id=<?=$values['id']?>">Request a Cleaner</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="register_your_company.php?id=<?=$values['id']?>">Register your Company</a></li>
              <li class="nav-item px-2"><a class="nav-link"  href="contact.php?id=<?=$values['id']?>">Contact Us</a></li>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="login.php">Sign In</a>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="AdminLogin.php">Login as Admin</a>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="index.php">Logout</a>
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

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pb-0">

    
                  <h1 class="text-center">OUR SERVICES</h1>
                  <h4 class="text-center"> Welcome <strong> <?= $value['first_name'] ?> <?= $value['last_name']?> </strong>, Book any service you want with us. </br> 
                Below are the various cleaning services we offer. You will get a 50% discount for your first booking.</h4>
                </div>
              </div>
            </div>
            <!-- end of .container-->
    
          </section>
          <!-- <section> close ============================-->   
    
          <section class="py-5">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:contain;">
            </div>
            <!--/.bg-holder-->
    
            <div class="container">
              <div class="row flex-center">
                <div class="col-xl-10 px-0">
                  <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                          <div class="col-md-4 mb-8 mb-md-0">
                            <div class="card card-span h-100 shadow">
                              <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/residential.jpg" width="200" alt="..." />
                                <h5 class="mt-3">Residential Cleaning</h5>
                                <p class="mb-0 fs-xxl-1">For your homes</p>
                                <div class="text-center">
                                 <a button class="btn btn-outline-secondary rounded-pill" type="submit" href="request_a_cleaner.php?id=<?=$values['id']?>" >Book Now</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 mb-8 mb-md-0">
                            <div class="card card-span h-100 shadow">
                              <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/office.jpg" width="200" alt="..." />
                                <h5 class="mt-3">Office Cleaning</h5>
                                <p class="mb-0 fs-xxl-1">For your Offices</p>
                                <div class="text-center">
                                  <a button class="btn btn-outline-secondary rounded-pill" type="submit"  href="request_a_cleaner.php?id=<?=$values['id']?>">Book Now</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 mb-8 mb-md-0">
                            <div class="card card-span h-100 shadow">
                              <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/factory.png" width="220" alt="..." />
                                <h5 class="mt-3">Factory Cleaning</h5>
                                <p class="mb-0 fs-xxl-1">For your Factories</p>
                                <div class="text-center">
                                 <a button class="btn btn-outline-secondary rounded-pill" type="submit"  href="request_a_cleaner.php?id=<?=$values['id']?>" >Book Now</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                          <div class="col-md-4 mb-8 mb-md-0">
                            <div class="card card-span h-100 shadow">
                              <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/floor.jpg" width="220" alt="..." />
                                <h5 class="mt-3">Floor Cleaning</h5>
                                <p class="mb-0 fs-xxl-1">For your Floors</p>
                                <div class="text-center">
                                 <a button class="btn btn-outline-secondary rounded-pill" type="submit"  href="request_a_cleaner.php?id=<?=$values['id']?>" >Book Now</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 mb-8 mb-md-0">
                            <div class="card card-span h-100 shadow">
                              <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/washroom.jpeg" width="200" alt="..." />
                                <h5 class="mt-3">Washroom Services</h5>
                                <p class="mb-0 fs-xxl-1">For your Washrooms</p>
                                <div class="text-center">
                                 <a button class="btn btn-outline-secondary rounded-pill" type="submit"  href="request_a_cleaner.php?id=<?=$values['id']?>" >Book Now</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 mb-8 mb-md-0">
                            <div class="card card-span h-100 shadow">
                              <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/window.jpg" width="200" alt="..." />
                                <h5 class="mt-3">Window Services</h5>
                                <p class="mb-0 fs-xxl-1">For your Windows</p>
                                <div class="text-center">
                                 <a button class="btn btn-outline-secondary rounded-pill" type="submit"  href="request_a_cleaner.php?id=<?=$values['id']?>" >Book Now</button></a>
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
              </div>
            </div>
          </section>


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