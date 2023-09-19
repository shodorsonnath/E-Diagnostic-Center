<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_patient']))
		{

            $pat_fname=$_POST['pat_fname'];
			$pat_lname=$_POST['pat_lname'];
			$pat_number=$_POST['pat_number'];
            $pat_phone=$_POST['pat_phone'];
            $pat_type=$_POST['pat_type'];
            $pat_addr=$_POST['pat_addr'];
            $pat_age = $_POST['pat_age'];
            $pat_dob = $_POST['pat_dob'];
            $pat_ailment = $_POST['pat_ailment'];
            $pat_diagonistic = $_POST['diagonistic'];
            $pat_department = $_POST['department'];
            $pat_test_name = $_POST['test_name'];
            //sql to insert captured values
			$query="insert into reg_patients (pat_fname, pat_ailment, pat_lname, pat_age, pat_dob, pat_number, pat_phone, pat_type, pat_addr, diagonistic, department, test_name) values(?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc = $stmt->bind_param('ssssssssssss', $pat_fname, $pat_ailment, $pat_lname, $pat_age, $pat_dob, $pat_number, $pat_phone, $pat_type, $pat_addr, $pat_diagonistic, $pat_department, $pat_test_name);
			$stmt->execute();

			// $pat_fname=$_POST['pat_fname'];
			// $pat_lname=$_POST['pat_lname'];
			// $pat_number=$_POST['pat_number'];
            // $pat_phone=$_POST['pat_phone'];
            // $pat_type=$_POST['pat_type'];
            // $pat_addr=$_POST['pat_addr'];
            // $pat_age = $_POST['pat_age'];
            // $pat_dob = $_POST['pat_dob'];
            // $pat_ailment = $_POST['pat_ailment'];
            // //sql to insert captured values
			// $query="insert into his_patients (pat_fname, pat_ailment, pat_lname, pat_age, pat_dob, pat_number, pat_phone, pat_type, pat_addr) values(?,?,?,?,?,?,?,?,?)";
			// $stmt = $mysqli->prepare($query);
			// $rc=$stmt->bind_param('sssssssss', $pat_fname, $pat_ailment, $pat_lname, $pat_age, $pat_dob, $pat_number, $pat_phone, $pat_type, $pat_addr);
			// $stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Patient Details Added";
			}
			else {
				$err = "Please Try Again Or Try Later";
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
                                                id="inputAddress" placeholder="Patient's Addresss">
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
                                            


                                        <a href="confirm.php" class="btn btn-success"> Confirm</a>

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