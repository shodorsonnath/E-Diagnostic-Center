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
    #preloader {
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
                                    <li class="has-submenu"><a href="services.php">Services</a>
                                    </li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li ><a href="blog.php">Blog</a>
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
            <!--== Start Hero Area Wrapper ==-->
            <section class="home-slider-area slider-default bg-img"
                data-bg-img="assets_frontend/img/slider/main-slide-01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Slide Item -->
                            <div class="slider-content-area" data-aos="fade-zoom-in" data-aos-duration="1300">
                                <h5>feel the difference with us</h5>
                                <h2>Your Health <span>Is Our Priority</span></h2>
                            </div>


                            <!-- End Slide Item -->


                            <div class="swiper-container service-slider-container">
                                <div class="swiper-wrapper service-slider service-category">

                                    <div class="swiper-slide category-item">
                                        <div class="icon">
                                            <i class="icofont-stethoscope-alt"></i>
                                        </div>
                                        <h4>Diagnose</h4>
                                        <p>Examination & Diagnosis</p>
                                    </div>

                                    <div class="swiper-slide category-item">
                                        <div class="icon">
                                            <i class="icofont-brain-alt"></i>
                                        </div>
                                        <h4>Treatment</h4>
                                        <p>Treatment of the disease</p>
                                    </div>

                                    <div class="swiper-slide category-item">
                                        <div class="icon">
                                            <i class="icofont-paralysis-disability"></i>
                                        </div>
                                        <h4>Care Healthy</h4>
                                        <p>Care and recuperation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->

            <!--== Start Appointment Form Area Wrapper ==-->
            <section class="appointment-area" data-bg-color="#eaeded">
                <div class="appointment-form-style1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="appointment-form">
                                    <div class="section-title">
                                        <h5>We Alway Ready Helps you</h5>
                                        <h2 class="title">Book For <span>Ambulance</span></h2>
                                    </div>
                                    <form id="contact-form" action="http://whizthemes.com/mail-php/raju/arden/mail.php"
                                        method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="con_name"
                                                        placeholder="Enter your name...">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="con_email"
                                                        placeholder="sample@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="con_phone"
                                                        placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group datepicker-group">
                                                    <label for="datepicker"
                                                        class="form-label icon icofont-calendar"></label>
                                                    <input class="form-control" id="datepicker" type="text"
                                                        name="con_date" placeholder="Date">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <textarea name="con_message" rows="7"
                                                        placeholder="Your message here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <button class="btn btn-theme" type="submit">Make an
                                                        appointment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Message Notification -->
                                <div class="form-message"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Appointment Form Area Wrapper ==-->

            <!--== Start Feature Area Wrapper ==-->
            <section class="feature-area feature-default-area" data-bg-color="#eaeded">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title" data-aos="fade-up" data-aos-duration="1100">
                                <h5>Why Choose Health Care Point</h5>
                                <h2 class="title">The Best <span>For Your Health</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-8">
                            <div class="row icon-box-style1" data-aos="fade-up" data-aos-duration="1100">
                                <div class="col-md-6">
                                    <div class="icon-box-item">
                                        <div class="icon">
                                            <i class="icofont-prescription"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Medical Report</h5>
                                            <p>One of the key services offered by Health Care Point is delivering a
                                                medico-legal report
                                                because we know this task includes the goal of appropriately describing
                                                the medical scenario detected</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box-item">
                                        <div class="icon">
                                            <i class="icofont-doctor-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Top Level Doctors</h5>
                                            <p>A doctor's responsibilities include the wellness of their patient.
                                                Health Care Point suggests top-tier specialists with the best medical
                                                records from various hospitals</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box-item">
                                        <div class="icon">
                                            <i class="icofont-microscope"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Medical Facilites</h5>
                                            <p>Health facilities play a vital role in the prevention process of any
                                                disease.
                                                Thus, Health Care Point offers various health facalities
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box-item">
                                        <div class="icon">
                                            <i class="icofont-ambulance-cross"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">24 Hours Services</h5>
                                            <p>In today's fast-paced environment, receiving prompt expert medical care
                                                is essential. We provide services around-the-clock because we are aware
                                                of how crucial it is in the medical industry.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box-item">
                                        <div class="icon">
                                            <i class="icofont-blood"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Personal Services</h5>
                                            <p>Health Care Point offers personal services for ensuring personal health
                                                care for all.
                                                Personal health care began to evolve due to a variety of important
                                                forces.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box-item">
                                        <div class="icon">
                                            <i class="icofont-paralysis-disability"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Dedicated Patient Care</h5>
                                            <p>Health Care Point provides devoted patient care of the highest caliber,
                                                improving patients' quality of life. In addition to feeling good and
                                                having a clear conscience, you would also be satisfied.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumb" data-aos="fade-left" data-aos-duration="1500">
                    <img src="assets_frontend/img/photos/doctor-01.png" alt="Health Care-Image">
                </div>
            </section>
            <!--== End Feature Area Wrapper ==-->

            <!--== Start Team Area Wrapper ==-->
            <section class="team-area team-default-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                                <h5>Meet Our Docots and Clinical Laboratory Technician</h5>
                                <h2 class="title">Professional & <span>Enthusiastic</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container team-slider-container" data-aos="fade-up"
                                data-aos-duration="1300">
                                <div class="swiper-wrapper team-slider">
                                    <!--== Start Team Item ==-->
                                    <div class="swiper-slide team-member">
                                        <div class="thumb">
                                            <img src="assets_frontend/img/team/3.jpg" alt="Health Care-HasTech">
                                        </div>
                                        <div class="content">
                                            <div class="member-info">
                                                <h4 class="name">Dr. Akram Kabir</h4>
                                                <p>One of the best colorectal surgeons in Bangladesh and the
                                                    Subcontinent is Professor Dr. Akram Kabir. He has extensive training
                                                    and 25 years of expertise in colon and rectal surgery.
                                                </p>
                                                <a href="#/" class="btn-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Team Item ==-->

                                    <!--== Start Team Item ==-->
                                    <div class="swiper-slide team-member">
                                        <div class="thumb">
                                            <img src="assets_frontend/img/team/6.jpg" alt="Health Care-HasTech">
                                        </div>
                                        <div class="content">
                                            <div class="member-info">
                                                <h4 class="name">Dr. Yusuf Sarker</h4>
                                                <p>In Bangladesh, Professor Dr. Yusuf Sarker practices some of the best
                                                    internal medicine and rheumatology. He has a solid reputation in
                                                    Bangladesh and has been offering his medical services for 11 years.
                                                </p>
                                                <a href="#/" class="btn-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Team Item ==-->

                                    <!--== Start Team Item ==-->
                                    <div class="swiper-slide team-member">
                                        <div class="thumb">
                                            <img src="assets_frontend/img/team/4.jpg" height="320px"
                                                alt="Health Care-HasTech">
                                        </div>
                                        <div class="content">
                                            <div class="member-info">
                                                <h4 class="name">Dr. Ferdousi Haque</h4>
                                                <p>One of Bangladesh's most esteemed gynecologists and obstetricians is
                                                    Assistant Professor Dr. Ferdousi Haque. She is also a skilled
                                                    laparoscopic gynecological surgeon with experience in infertility.
                                                </p>
                                                <a href="#/" class="btn-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Team Item ==-->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Team Area Wrapper ==-->

            <!--== Start Testimonial Area Wrapper ==-->
            <section class="testimonial-area testimonial-default-area bg-img"
                data-bg-img="assets_frontend/img/photos/testimonial-bg1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                                <h5>Testimonial</h5>
                                <h2 class="title">Trusted <span>From Clients</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container testimonial-slider-container" data-aos="fade-up"
                                data-aos-duration="1100">
                                <div class="swiper-wrapper testimonial-slider">
                                    <!--== Start Testimonial Item ==-->
                                    <div class="swiper-slide testimonial-item">
                                        <div class="thumb">
                                            <img src="assets_frontend/img/testimonial/6.jpg" alt="Image">
                                        </div>
                                        <div class="client-content">
                                            <p>"Working with Health Care has been an absolute delight; their response to
                                                our brief exceeded expectations, and the execution was quick, competent,
                                                and reassuring. I wholeheartedly endorse them."</p>
                                        </div>
                                        <div class="client-info">
                                            <div class="desc">
                                                <h4 class="name">Prof. Dr. Shariful Alam</h4>
                                                <p class="client-location">Popular Diagonestic Centre Ltd., Dhaka,
                                                    Bangladesh</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                    <!--== Start Testimonial Item ==-->
                                    <div class="swiper-slide testimonial-item">
                                        <div class="thumb">
                                            <img src="assets_frontend/img/testimonial/4.jpg" alt="Image">
                                        </div>
                                        <div class="client-content">
                                            <p>"I heartily endorse Health Care Point because of their outstanding
                                                medical expertise, warmth, and dedication to helping their patients.
                                                Their patients frequently experience quick recoveries as a result of
                                                their examinations, diagnostic interpretations, and prescription
                                                suggestions."</p>
                                        </div>
                                        <div class="client-info">
                                            <div class="desc">
                                                <h4 class="name">Dr. Namun Nahar</h4>
                                                <p class="client-location">Samorita Hospital Ltd., Dhaka, Bangladesh</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Testimonial Item ==-->
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-logo-area brand-logo-default-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title text-center" data-aos="fade-up"
                                            data-aos-duration="1000">
                                            <h5>Partnerships</h5>
                                            <h2 class="title"><span>Partners and AFFILIATES</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container brand-logo-slider-container" data-aos="fade-up"
                                    data-aos-duration="1200">
                                    <div class="swiper-wrapper brand-logo-slider">
                                        <div class="swiper-slide brand-logo-item">
                                            <a href="#/"><img src="assets_frontend/img/brand-logo/11.png"
                                                    alt="Health Care-Brand-Logo"></a>
                                        </div>
                                        <div class="swiper-slide brand-logo-item">
                                            <a href="#/"><img src="assets_frontend/img/brand-logo/12.png"
                                                    alt="Health Care-Brand-Logo"></a>
                                        </div>
                                        <div class="swiper-slide brand-logo-item">
                                            <a href="#/"><img src="assets_frontend/img/brand-logo/13.png"
                                                    alt="Health Care-Brand-Logo"></a>
                                        </div>
                                        <div class="swiper-slide brand-logo-item">
                                            <a href="#/"><img src="assets_frontend/img/brand-logo/14.png" height=""
                                                    alt="Health Care-Brand-Logo"></a>
                                        </div>
                                        <div class="swiper-slide brand-logo-item">
                                            <a href="#/"><img src="assets_frontend/img/brand-logo/15.png"
                                                    alt="Health Care-Brand-Logo"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Testimonial Area Wrapper ==-->

            <!--== Start Pricing Area Wrapper ==-->
            <section class="pricing-area pricing-default-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                                <h5>Pricing List</h5>
                                <h2 class="title">Protect <span>With Health Care Card</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row-gutter-0 pricing-items-style1" data-aos="fade-up" data-aos-duration="1100">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="pricing-item item-one">
                                <div class="pricing-title">
                                    <h5>Basic</h5>
                                </div>
                                <div class="pricing-amount">
                                    <h2><sup>Tk</sup>500</h2>
                                    <span class="period">/Per month</span>
                                </div>
                                <div class="pricing-content">
                                    <p class="desc">Free with 14 days trial, then you can choose plan</p>
                                    <ul class="pricing-list">
                                        <li><i class="icofont-check-circled"></i> Psychiatry Tests</li>
                                        <li><i class="icofont-check-circled"></i> Blood Test</li>
                                        <li><i class="icofont-check-circled"></i> Allergy Test</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a class="btn-theme btn-border" href="#/">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="pricing-item item-two">
                                <div class="pricing-title">
                                    <h5>Standard</h5>
                                </div>
                                <div class="pricing-amount">
                                    <h2><sup>Tk</sup>800</h2>
                                    <span class="period">/ Two months</span>
                                </div>
                                <div class="pricing-content">
                                    <p class="desc">Free with 14 days trial, then you can choose plan</p>
                                    <ul class="pricing-list">
                                        <li><i class="icofont-check-circled"></i> Cardiology Tests</li>
                                        <li><i class="icofont-check-circled"></i> Diagnosis</li>
                                        <li><i class="icofont-check-circled"></i> ECG</li>
                                        <li><i class="icofont-check-circled"></i> Blood Test</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a class="btn-theme btn-border active" href="#/">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="pricing-item item-three">
                                <div class="pricing-title">
                                    <h5>Premium</h5>
                                </div>
                                <div class="pricing-amount">
                                    <h2><sup>Tk</sup>2000</h2>
                                    <span class="period">/Five months</span>
                                </div>
                                <div class="pricing-content">
                                    <p class="desc">Free with 14 days trial, then you can choose plan</p>
                                    <ul class="pricing-list">
                                        <li><i class="icofont-check-circled"></i> Immunology Tests</li>
                                        <li><i class="icofont-check-circled"></i> Opthalmology Tests</li>
                                        <li><i class="icofont-check-circled"></i> Allergy Test</li>
                                        <li><i class="icofont-check-circled"></i> Dental Radiography</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a class="btn-theme btn-border" href="#/">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="pricing-item item-four">
                                <div class="pricing-title">
                                    <h5>Ultimate</h5>
                                </div>
                                <div class="pricing-amount">
                                    <h2><sup>Tk</sup>3500</h2>
                                    <span class="period">/Eight months</span>
                                </div>
                                <div class="pricing-content">
                                    <p class="desc">Free with 14 days trial, then you can choose plan</p>
                                    <ul class="pricing-list">
                                        <li><i class="icofont-check-circled"></i> Immunology Tests</li>
                                        <li><i class="icofont-check-circled"></i> Dental Treatment</li>
                                        <li><i class="icofont-check-circled"></i> Cardiology Tests</li>
                                        <li><i class="icofont-check-circled"></i> Opthalmology Tests</li>
                                        <li><i class="icofont-check-circled"></i> Nutrition Prescribe</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a class="btn-theme btn-border" href="#/">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Pricing Area Wrapper ==-->

            <!--== Start Blog Area Wrapper ==-->
            <section class="blog-area blog-default-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="title">Tips & <span>Tricks</span></h2>
                            </div>
                            <div class="post-items-style1" data-aos="fade-up" data-aos-duration="1100">
                                <!--== Start Blog Post Item ==-->
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="blog-details.php"><img src="assets_frontend/img/blog/01.jpg"
                                                alt="Health Care-Blog"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="blog-details.php">What is causing my back pain, and how can I
                                                remedy it?</a>
                                        </h4>
                                        <div class="meta">Nov 22th, 2022 by <a class="author" href="blog.php">Admin</a>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Blog Post Item ==-->

                                <!--== Start Blog Post Item ==-->
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="blog-details.php"><img src="assets_frontend/img/blog/02.jpg"
                                                alt="Health Care-Blog"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="blog-details.php">How should I eat to prevent acne?</a>
                                        </h4>
                                        <div class="meta">Feb 17th, 2021 by <a class="author" href="blog.php">Admin</a>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Blog Post Item ==-->

                                <!--== Start Blog Post Item ==-->
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="blog-details.php"><img src="assets_frontend/img/blog/03.jpg"
                                                alt="Health Care-Blog"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="blog-details.php">Need a nurse for my old mother<br>the house</a>
                                        </h4>
                                        <div class="meta">Jul 25th, 2023 by <a class="author" href="blog.php">Admin</a>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Blog Post Item ==-->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-title mt-md-70" data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="title">FAQs</h2>
                            </div>
                            <div class="accordian-content" data-aos="fade-up" data-aos-duration="1100">
                                <div class="accordion accordion-style2 no-bg" id="accordionStyle">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                How Can I know my blood pressure is high?
                                                <i class="icon icon-plus icofont-thin-down"></i>
                                                <i class="icon icon-minus icofont-close-line"></i>
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionStyle">
                                            <div class="accordion-body">
                                                Only a doctor or other qualified healthcare provider can determine if
                                                you have high blood pressure. Your blood pressure can be quickly and
                                                painlessly measured.
                                                SMBP monitoring, also known as self-measured blood pressure (SMP)
                                                monitoring, is something you should discuss with your medical team.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                My child is suffering from fever, how can I know that is it bacterial
                                                fever or not?
                                                <i class="icon icon-plus icofont-thin-down"></i>
                                                <i class="icon icon-minus icofont-close-line"></i>
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionStyle">
                                            <div class="accordion-body">
                                                When symptoms remain longer than the customary 10–14 days for a virus,
                                                the fever is greater than one may typically expect from a virus, and the
                                                fever worsens rather than lessens a few days into the illness, bacterial
                                                infections may be the cause. Your doctor will probably want to check the
                                                urine if your child has a fever but no obvious infection.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                I am having rashes on my skin, what should I do?
                                                <i class="icon icon-plus icofont-thin-down"></i>
                                                <i class="icon icon-minus icofont-close-line"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionStyle">
                                            <div class="accordion-body">
                                                It is frequently possible to identify the etiology of a rash based on
                                                its appearance, location, and symptoms. The use of skin examinations,
                                                such as scrapings or biopsies, can also aid in the diagnosis. Sometimes
                                                the origin of the rash is still a mystery. If you experience any of the
                                                following symptoms, or if you have a purple rash that resembles a
                                                bruise, talk to your doctor very once.


                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                What does the start of a migraine feel like?
                                                <i class="icon icon-plus icofont-thin-down"></i>
                                                <i class="icon icon-minus icofont-close-line"></i>
                                            </button>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionStyle">
                                            <div class="accordion-body">
                                                An aura, which occurs in some people, is a warning indication that a
                                                migraine is on the way. Their vision becomes fuzzy or restricted, and
                                                they may notice stars or zigzag lines about 10 to 15 minutes before the
                                                headache actually begins. A headache from a migraine feels like a
                                                throbbing or pounding pain that usually affects one side of the brain
                                                more than the other.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn-line" href="#/">View All Questions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Blog Area Wrapper ==-->


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
                                    <li class="info-address"><i class="icofont-location-pin"></i>Noor Palace, Shahid
                                        Baki Road,
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
                    <div
                        class="col-sm-6 col-md-6 offset-md-1 col-lg-3 offset-lg-0 col-xl-3 d-lg-none d-xl-block mx-auto">
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
                                <p>© 2023 <span>Health Care</span>. All Right Reserved by <a target="_blank"
                                        href="https://www.hasthemes.com">Health Care Point</a></p>
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
                            <a href="index.php"><img src="assets_frontend/img/logoL.png" alt="Logo" /></a>
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
    window.addEventListener("load", function() {
        loader.style.display = "none";
    })
    </script>




    <!-- Javascript -->
    <!-- <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script> -->

</body>

</html>