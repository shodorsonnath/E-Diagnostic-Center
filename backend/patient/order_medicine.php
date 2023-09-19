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
        $success = "Order Medicine Confirmed.";
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
                                
                                    <h4 class="page-title fs-3 fw-medium mt-2">Order Medicine</h4>
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
                                       

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Mobile Number</label>
                                                <input required="required" type="text" name="pat_phone"
                                                    class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Patient Ailment</label>
                                                <input required="required" type="text" name="pat_ailment"
                                                    class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState" class="col-form-label">Patient's Type</label>
                                                <select id="inputState" required="required" name="pat_type"
                                                    class="form-control">
                                                    <option>Select One</option>
                                                    <option>General</option>
                                                    <option>Emergency</option>
                                                </select>
                                                <i class="fas fa-angle-down custom-select-icon"></i>
                                            </div>
                                            

                                            <div class="form-group col-md-4 custom-select-container">
                                            <label for="inputState" class="col-form-label">Medicine Name</label>
                                            <input required="required" type="text" name="department"
                                                    class="form-control" id="inputCity">
                                                    
                                            </div>
                                            
                                            <div class="form-group col-md-4 custom-select-container">
                                                <label for="inputEmail4" class="col-form-label">Delivery Date</label>
                                                <input type="text" required="required" name="department"
                                                    class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                            </div>
                                            <div class="form-group col-md-2" style="display:none">
                                                <?php 
                                                        $length = 5;    
                                                        $patient_number =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                                    ?>
                                                <label for="inputZip" class="col-form-label">Patient Number</label>
                                                <input type="text" name="pat_number"
                                                    value="<?php echo $patient_number;?>" class="form-control"
                                                    id="inputZip">
                                            </div>
                                            
                                        </div>

                                        <button type="submit" name="add_patient" class="ladda-button btn btn-info"
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