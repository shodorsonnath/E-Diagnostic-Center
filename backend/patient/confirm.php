<?php
session_start();
include('assets/inc/config.php');

if(isset($_POST['add_patient'])) {
    if(isset($_POST['pat_fname'], $_POST['pat_lname'], $_POST['pat_number'], $_POST['pat_phone'], $_POST['pat_type'], $_POST['pat_addr'], $_POST['pat_age'], $_POST['pat_dob'], $_POST['pat_ailment'], $_POST['diagonistic'], $_POST['department'], $_POST['app_date'])) {

        $pat_dob = $_POST['pat_dob'];
        $pat_age = $_POST['pat_age'];
        $pat_phone = $_POST['pat_phone'];
        $pat_ailment = $_POST['pat_ailment'];
        $pat_type = $_POST['pat_type'];
        $diagonistic = $_POST['diagonistic'];
        $department = $_POST['department'];
        $app_date = $_POST['app_date'];

        // Establish a connection to the database
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check if the connection is successful
        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Insert data into the database
        $sql = "INSERT INTO appointment (dob, Age, mobile, ailment, pat_typ, hospital, dept, app_date) VALUES ('$pat_dob', '$pat_age', '$pat_phone', '$pat_ailment', '$pat_type', '$diagonistic', '$department', '$app_date')";

        if(mysqli_query($conn, $sql)) {
            $success = "Details Added";
        } else {
            $err = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the connection
        mysqli_close($conn);

    } else {

        $totalPayment = rand(1000, 1500);
    
        $success = "Appointment Confirmed. Total Payment: $totalPayment TK "; 
    }
    
    
}
?>
<!--End Server Side-->
<!--End Patient Registration-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
    <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include("assets/inc/nav.php");?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include("assets/inc/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                
                                    <h4 class="page-title fs-3 fw-medium mt-2">Confirm Test</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!--Add Patient Form-->
                                        <form method="post">
                                        

                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Patient Health Information</label>
                                            <input required="required" type="text" class="form-control" name="pat_addr"
                                                id="inputAddress" placeholder="Patient's Health Information">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Sample Collection Time and Date</label>
                                                <input required="required" type="text" name="pat_phone"
                                                    class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Delivery Time and Date</label>
                                                <input required="required" type="text" name="pat_ailment"
                                                    class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="col-form-label">Payment Type</label>
                                                <select id="inputState" required="required" name="pat_type"
                                                    class="form-control">
                                                    <option>Select One</option>
                                                    <option>Cash</option>
                                                    <option>Bkash</option>
                                                    <option>Nagad</option>
                                                    <option>Card</option>
                                                </select>
                                                <i class="fas fa-angle-down custom-select-icon"></i>
                                            </div>
                                            


                                            <button type="submit" name="add_patient" class="ladda-button btn btn-success"
                                            data-style="expand-right">Confirm Order</button>


                                    </form>
                                    <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('assets/inc/footer.php');?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!-- Loading buttons js -->
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>

        <!-- Buttons init js-->
        <script src="assets/js/pages/loading-btn.init.js"></script>
        
    </body>

</html>