<?php
    session_start();
    include('assets/inc/config.php');//get configuration file
    if(isset($_POST['doc_login']))
    {
        $doc_email = $_POST['doc_email'];
        //$doc_email = $_POST['doc_ea']
        $doc_pwd = sha1(md5($_POST['doc_pwd']));//double encrypt to increase security
        $stmt=$mysqli->prepare("SELECT doc_email, doc_pwd, doc_id FROM his_docs WHERE  doc_email=? AND doc_pwd=? ");//sql to log in user
        $stmt->bind_param('ss', $doc_email, $doc_pwd);//bind fetched parameters
        $stmt->execute();//execute bind
        $stmt -> bind_result($doc_email, $doc_pwd ,$doc_id);//bind result
        $rs=$stmt->fetch();
        $_SESSION['doc_id'] = $doc_id;
        $_SESSION['doc_email'] = $doc_email;//Assign session to doc_email id
        //$uip=$_SERVER['REMOTE_ADDR'];
        //$ldate=date('d/m/Y h:i:s', time());
        if($rs)
            {//if its sucessfull
                header("location:his_doc_dashboard.php");
            }

        else
            {
            #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
                $err = "Access Denied Please Check Your Credentials";
            }
    }
?>
<!--End Login-->
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Health Care Point</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!--== Main Style CSS ==-->
    <link href="assets_frontend/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset_login/css/style.css">

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

        
        <script src="assets/js/swal.js"></script>
        <!--Inject SWAL-->
        <?php if(isset($success)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success","<?php echo $success;?>","success");
                            },
                                100);
                </script>

        <?php } ?>

        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Failed","<?php echo $err;?>","error");
                            },
                                100);
                </script>

        <?php } ?>



    </head>

    <body>
 <!--== Start Preloader Content ==-->
 <div id="preloader"></div>
    <!--== End Preloader Content ==-->
    <section class="ftco-section bg-img" data-bg-img="assets_frontend/img/photos/testimonial-bg1.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #07</h2>
				</div> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last bg-img"
                            data-bg-img="assets_frontend/img/shape/01.jpg">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>Don't have an account?</p>
                                <a href="../../register.php" class="btn btn-white btn-outline-white">Register</a>
                                <div >
                                <p class="mt-3">Administrator or Employee?</p>
                                <a href="../../backend/admin/index.php" class="btn btn-white btn-outline-white">Admin login</a>
                                <a href="../../backend/employee/index.php" class="btn btn-white btn-outline-white">Employee login</a>
                                </div>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h2 class="mb-4"><b><span style="color: #2A9696;">Sign In</span></b></h2>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="his_doc_dashboard.php" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="email"><a href="#">Email</a></label>
                                    <input class="form-control" name="doc_email"  type="text" id="emailaddress" required="" placeholder="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password"><a href="#">Password</a></label>
                                    <input class="form-control" name="doc_pwd" type="password" required="" id="password" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <button name="doc_login" type="submit" class="form-control btn btn-primary submit px-3 bg-img"
                                        data-bg-img="assets_frontend/img/shape/01.jpg" style="border: none;"><b>Sign
                                            In</b></button>
                                </div>

                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">
                                            <span style="color: #2A9696;">Remember Me</span>
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <!--=== Login Js ===-->
    <script src="asset_login/js/jquery.min.js"></script>
    <script src="asset_login/js/popper.js"></script>
    <script src="asset_login/js/bootstrap.min.js"></script>
    <script src="asset_login/js/main.js"></script>

        <?php include ("assets/inc/footer1.php");?>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>