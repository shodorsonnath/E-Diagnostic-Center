<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Page Title -->
    <title>Health Care Point</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets_frontend\img\favicon-32x32.png" type="image/x-icon" />

    <!--== Main Style CSS ==-->
    <link href="assets_frontend/css/style.css" rel="stylesheet" />

    <!-- Preloader -->
    <style>
        #preloader{
            background: #ffffff url(Ecg\ loder.gif) no-repeat center center;
            background-size: 15%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
        }
    </style>
</head>

<body>

    <!-- <li><a href="backend/doc/index.php">Doctor's Login</a></li>
    <li><a href="backend/admin/index.php">Administrator Login</a></li> -->

    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">

        <!--== Start Preloader Content ==-->
        <div id="preloader"></div>
        <!--== End Preloader Content ==-->

        <!--== Start Header Wrapper ==-->
        <header class="header-area header-default transparent sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="header-align">
                            <div class="header-logo-area">
                                <a href="index.php">
                                    <img class="logo-main" src="assets_frontend/img/logoh.png" alt="Logo" />
                                    <img class="logo-light" src="assets_frontend/img/logoL.png" alt="Logo" />
                                </a>
                            </div>
                            <div class="header-navigation-area">
                                <ul class="main-menu nav justify-content-center">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="has-submenu "><a href="services.php">Services</a>
                                    </li>
                                    <li class="active"><a href="about.php ">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li class="has-submenu"><a href="blog.php">Blog</a>
                                    <li ><a href="chatbot.php">Smart Chatbot</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-action-area">
                                <div class="login-reg">
                                    <a href="backend/patient/index.php">log in</a><span>/</span><a href="register.php">register</a> <i
                                        class="icon icofont-user-alt-3"></i>
                                </div>
                                <button class="btn-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->


  <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img bg-img-top" data-bg-img="assets_frontend/img/photos/about-bg1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 m-auto">
            <div class="page-title-content content-style5 text-center">
              <p>Health Care medical center</p>
              <h4 class="title">About <span>Health Care</span></h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="text-pra">We are passionate about revolutionizing medical test & healthcare through the power of technology and innovation. Our mission is to bridge the gap between healthcare and the digital age, making quality medical test home services  accessible, efficient, and convenient for everyone.</p>
            <div class="service-list-content">
              <h4 class="title">Services</h4>
              <p class="text-block">We give home service for medical tests & deliver reports at your door steps.We also assure a better experience in a easy way.</p>
              <p>Our platform seamlessly integrates cutting-edge technology with medical expertise, delivering a range of benefits like test samples collection from home,giving suggestion of doctor and get access of a wide range of tests services at home from your desired hospitals at a cheaper price range.</p>
              <div class="service-list">
                <ul>
                  <li><a href="departments.php">Psychiartry</a></li>
                  <li><a href="departments.php">Opthalmology</a></li>
                  <li><a href="departments.php">Cardiology</a></li>
                  <li><a href="departments.php">Immunology</a></li>
                </ul>
                <ul>
                  <li><a href="departments.php">Gastroenterology</a></li>
                  <li><a href="departments.php">Hematology</a></li>
                  <li><a href="departments.php">Orthopedics</a></li>
                  <li><a href="departments.php">Pulmonary</a></li>
                </ul>
                <ul>
                  <li><a href="departments.php">Oncology</a></li>
                  <li><a href="departments.php">Physiotherapy</a></li>
                  <li><a href="departments.php">Dental</a></li>
                  <li><a href="departments.php">Rheumatology</a></li>
                </ul>
              </div>
            </div>
            <div class="office-center-content">
              <h4 class="title">Our center</h4>
              <p>Our center consists a wide range of expert employees who will collect and deliver your test samples & reports on time.</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="gallery-item mb-30">
                    <div class="thumb">
                      <a class="lightbox-image" data-fancybox="gallery" href="assets_frontend/img/about/01.jpg">
                        <img src="assets_frontend/img/about/01.jpg" alt="Image">
                      </a>
                      <div class="overlay"><i class="icofont-plus"></i></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="gallery-item mb-30">
                    <div class="thumb">
                      <a class="lightbox-image" data-fancybox="gallery" href="assets_frontend/img/about/02.jpg">
                        <img src="assets_frontend/img/about/02.jpg" alt="Image">
                      </a>
                      <div class="overlay"><i class="icofont-plus"></i></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="gallery-item">
                    <div class="thumb">
                      <!-- <a class="lightbox-image" data-fancybox="gallery" href="assets_frontend/img/about/03.jpg">
                        <img src="assets_frontend/img/about/03.jpg" alt="Image">
                      </a> -->
                      <div class="overlay"><i class="icofont-plus"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="office-address-content">
                <div class="office-address-item">
                  <h5>Shyamoli</h5>
                  <ul>
                    <li class="info-address">1st floor,Dinnath Road, Faridabad,Dhaka</li>
                    <li class="info-phone"> +008 01861837259</li>
                    <li class="info-mail">healthcarepoint@gmail.com</li>
                  </ul>
                </div>
                <div class="office-address-item">
                  <h5>Khilgaon</h5>
                  <ul>
                    <li class="info-address">Noor Palace,Shahid Baki Road,C-Block,3rd Floor,Dhaka</li>
                    <li class="info-phone">+008 01861837258</li>
                    <li class="info-mail">healthcarepoint@gmail.com</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->
  </main>

 <!--== Start Footer Area Wrapper ==-->
 <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 mx-auto">
                        <div class="widget-item">
                            <div class="about-widget">
                                <a class="footer-logo" href="index.php">
                                    <img src="assets_frontend/img/logoh.png" alt="Logo">
                                </a>
                                <p class="mb-0">
                                </p>
                                <ul class="widget-contact-info">
                                    <li class="info-address"><i class="icofont-location-pin"></i>Noor Palace, Shahid Baki Road, 
                                    C-Block, 3rd Floor, Dhaka
                                        </li>
                                    <li class="info-mail"><i class="icofont-email"></i><a
                                            href="mailto://hello@yourdomain.com">healthcarepoint@gmail.com</a></li>
                                    <li class="info-phone"><i class="icofont-ui-call"></i><a
                                            href="tel://(0091) 8547 632521">(+880) 1861837258</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 offset-md-1 col-lg-3 offset-lg-0 col-xl-3 d-lg-none d-xl-block mx-auto">
                        <div class="widget-item d-inline-block">
                            <h4 class="widget-title line-bottom">Popular Tags</h4>
                            <div class="widget-tags">
                                <ul>
                                    <li><a href="#/">Health</a></li>
                                    <li><a href="#/">Blood Test</a></li>
                                    <li><a href="#/">Antibody</a></li>
                                    <li><a href="#/">Bone Marrow</a></li>
                                    <li><a href="#/">Care</a></li>
                                    <li><a href="#/">Cancer</a></li>
                                    <li><a href="#/">Pulmonary</a></li>
                                    <li><a href="#/">Retina</a></li>
                                    <li><a href="#/">Dental</a></li>
                                    <li><a href="#/">Test</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 offset-md-1 col-lg-4 offset-lg-0 col-xl-3 mx-auto">
                        <div class="widget-item">
                            <h4 class="widget-title line-bottom">Newsletter</h4>
                            <div class="widget-newsletter">
                                <p>Sign up for our mailing list to get latest updates and offers.</p>
                                <form class="newsletter-form input-btn-group">
                                    <input class="form-control" type="text" placeholder="Enter your email">
                                    <button class="btn btn-theme" type="button"><i
                                            class="icofont-long-arrow-right"></i></button>
                                </form>
                            </div>
                            <div class="widget-social-icons">
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-google-plus"></i></a>
                                <a href="#"><i class="icofont-pinterest"></i></a>
                                <a href="#"><i class="icofont-rss"></i></a>
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="widget-copyright">
                                <p>© 2023 <span>Health Care</span>. All Right Reserved by <a
                                        target="_blank" href="https://www.hasthemes.com">Health Care Point</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="logo-area">
            <a href="index.php"><img src="assets_frontend/img/logo.png" alt="Logo" /></a>
          </div>
          <div class="close-action">
            <button class="btn-close"><i class="lnr lnr-cross"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
        <!-- Off Canvas Footer -->
        <div class="off-canvas-footer"></div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->  
</div>

<!--=======================Javascript============================-->

<!--=== Modernizr Min Js ===-->
<script src="assets_frontend/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets_frontend/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets_frontend/js/jquery-migrate.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets_frontend/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets_frontend/js/bootstrap.min.js"></script>
<!--=== jquery UI Min Js ===-->
<script src="assets_frontend/js/jquery-ui.min.js"></script>
<!--=== Plugin Collection Js ===-->
<script src="assets_frontend/js/plugincollection.js"></script>


<!--=== Custom Js ===-->
<script src="assets_frontend/js/custom.js"></script>
<script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function(){
            loader.style.display="none";
        })
    </script>

</body>

</html>