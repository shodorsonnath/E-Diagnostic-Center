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
                                
                                    <h4 class="page-title fs-3 fw-medium mt-2">Add Patient Details</h4>
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
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">First Name</label>
                                                <input type="text" required="required" name="pat_fname"
                                                    class="form-control" id="inputEmail4"
                                                    placeholder="Patient's First Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Last Name</label>
                                                <input required="required" type="text" name="pat_lname"
                                                    class="form-control" id="inputPassword4"
                                                    placeholder="Patient`s Last Name">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Date Of Birth</label>
                                                <input type="text" required="required" name="pat_dob"
                                                    class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Age</label>
                                                <input required="required" type="text" name="pat_age"
                                                    class="form-control" id="inputPassword4"
                                                    placeholder="Patient`s Age">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Address</label>
                                            <input required="required" type="text" class="form-control" name="pat_addr"
                                                id="inputAddress" placeholder="Patient's Addresss">
                                        </div>

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
                                                <label for="inputState" class="col-form-label">Select Diagnostic
                                                    Center</label>
                                                <select id="inputState" required="required" name="diagonistic"
                                                    class="form-control">
                                                    <option>Select Diagnostic </option>
                                                    <option>Popular</option>
                                                    <option>IBNE SINA</option>
                                                    <option>Labaid</option>
                                                    <option>Square</option>
                                                    <option>Asgor Ali</option>
                                                </select>
                                                <i class="fas fa-angle-down custom-select-icon"></i>
                                            </div>

                                            <div class="form-group col-md-4 custom-select-container">
                                                <label for="inputState" class="col-form-label">Select Department</label>
                                                <select id="mainDropdown" required="required" name="department"
                                                    class="form-control">
                                                    <option value="select">Select Department</option>
                                                    <option value="option1">Radiology</option>
                                                    <option value="option2">Cardiology</option>
                                                    <option value="option3">Gastroenterology</option>
                                                    <option value="option4">UltraSound</option>
                                                    <option value="option5">Pathology</option>
                                                    <option value="option6">Imaging</option>
                                                    <option value="option7">Ophthalmology</option>
                                                    <option value="option8">Neurology</option>
                                                </select>
                                                <i class="fas fa-angle-down custom-select-icon"></i>
                                            </div>
                                            <div class="form-group col-md-4 custom-select-container">
                                                <label for="inputState" class="col-form-label">Select Diagnostic</label>
                                                <select id="mainDropdown" required="required" name="test_name"
                                                    class="form-control">
                                                    <option value="select">Select One</option>
                                                    <option value="option1">ECG </option>
<option value="option2"> Holter ECG 120hrs</option>
<option value="option3"> Holter ECG 48hrs</option>
<option value="option4">Holter ECG 72hrs </option>
<option value="option5"> Anesthesia Charge for Echo/Echo Color Doppler</option>
<option value="option6"> Colour Doppler Echo CFM</option>
<option value="option7">Echo Colour Doppler </option>
<option value="option8">Echo Colour Doppler (Child) </option>
<option value="option9">Pulmonary Function Test/Lung Function Test/Spirometry </option>
<option value="option10">ETT </option>
<option value="option11"> Endoscopic Removal of Foreign body Teeth (A)option>
<option value="option12">ERCP & Papilotomy (DAROB) </option>
<option value="option13"> ERCP & Stone Extraction (DDEWAN)</option>
<option value="option14">ERCP + NBDT (A) </option>
<option value="option15">ERCP Diagnostic (MR) </option>
<option value="option16">Video Endooscopic Varicial Band Ligation (A) </option>
<option value="option17"> Video Endoscopic Sclerotherapy (A)</option>
<option value="option18"> Video Endoscopy and CLO Test (DSWAPAN)</option>
<option value="option19"> Video Endoscopy with Polypectomy (DDEWAN)</option>
<option value="option20">Video Sclerotherapy (DMIAN) </option>
<option value="option21"> Digital EEG</option>
<option value="option22"> Digital EEG (01 Hour )</option>
<option value="option23"> Digital EEG (30 Minutes)</option>
<option value="option24"> EMG Both Limb (Upper & Lower)</option>
<option value="option25"> EMG (Multiple Sites)</option>
<option value="option26"> EMG NCV Both Side (Upper & Lower)</option>
<option value="option27"> NCV Single Part</option>
<option value="option28"> NCV Upper Limb (Left Side)</option>

<option value="option29">NCV Upper Limb (Right Side) </option>
<option value="option30">Carotid Duplex </option>
<option value="option31"> Duplex Study of Arteri</option>
<option value="option32">Duplex Study of Left Lower Limb Arteries </option>
<option value="option33"> Duplex Study of Right Lower Limb Arteries</option>
<option value="option34"> Duplex Study of Right Lower limb Vessels</option>
<option value="option35"> Duplex Study of Right Upper limb Veins</option>
<option value="option36">Duplex Study of Scotum </option>
<option value="option37">Duplex Study of Neck Vessel </option>
<option value="option38">Vision Test </option>
<option value="option39"> 1 hour postprandial Plasma glucose</option>
<option value="option40">1.5 hrs postprandial Plasma glucose </option>
<option value="option41"> 24 hrs. Urinary Chloride (Cl)</option>
<option value="option42">24 hrs. Urine for Magnesium </option>
<option value="option43">24 hrs. Urine for Phosphate </option>
<option value="option44"> Allergy profile</option>
<option value="option45">Blood for C/S (FAN Method) </option>
<option value="option46"> Bone Marrow for C/S</option>
<option value="option47">Bone Marrow for Fungus </option>
<option value="option48"> COVID-19 Rapid Antigen Test</option>
<option value="option49"> Endoscopic Biopsy of Stomach</option>
<option value="option50"> HIV - 1&2</option>
<option value="option51"> HVS For AFB</option>
<option value="option52"> ICT for Alcohol</option>
<option value="option53">Kidney (Needle Biopsy) </option>
<option value="option54">Skin Biopsy </option>
<option value="option55"> Spot Urine Calcium</option>
<option value="option56"> Tissue for C/S</option>
<option value="option57"> CHILD MRI OF KUB</option>
<option value="option58"> CT Scan of Base of the Skull</option>
<option value="option59"> CT SCAN LUMBER SPINE SCREENING WHOLE SPINE</option>
<option value="option60">CT Scan of Ears </option>
<option value="option61">CT Scan of Left Ankle </option>
<option value="option62"> Digital X-Ray for 100% (Three Films)</option>

<option value="option63"> Digital X-Ray of Both Shoulder joint Lateral view</option>
<option value="option64"> Digital X-Ray of Both Ankle Joint (B/V)</option>
<option value="option65"> Digital X-Ray of Both Knee Joint AP View Standing Position</option>
<option value="option66"> Digital X-Ray of Both Wrist Lateral View</option>
<option value="option67">Digital X-Ray of Chest left lateral decubitus view </option>
<option value="option68"> Digital X-Ray of Sinus (PNS) </option>
<option value="option69"> Digital X-Ray of Whole Spine</option>
<option value="option70"> MRA of Brain</option>
<option value="option71"> MRI & MRA + MR Perfusion of Brain</option>

<option value="option72"> Ultrasonogram of Swelling</option>
<option value="option73"> Viability Twin (TVS)(F753)</option>
<option value="option74"> HAVRIX - A (Adult)</option>
<option value="option75"> Varilrix (Chicken Pox)</option>




                                                </select>
                                                <i class="fas fa-angle-down custom-select-icon"></i>
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
                                            data-style="expand-right">Add Patient</button>

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