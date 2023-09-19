<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
?>
<!DOCTYPE html>
<html lang="en">
    
<?php include ('assets/inc/head.php');?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include('assets/inc/nav.php');?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                <?php include("assets/inc/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                $lab_id=$_GET['lab_id'];
                $lab_number=$_GET['lab_number'];
                $ret="SELECT  * FROM his_laboratory WHERE lab_id = ?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$lab_id);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
                    $mysqlDateTime = $row->lab_date_rec;
            ?>

                <div class="content-page">
                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">
                            
                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title fs-3 fw-medium mt-2">Details Report</h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                            <div class="text-center">
                                                <img src="assets/images/logoh.png" alt="" height="80">
                                                <h4 class="page-title fs-3 fw-medium mt-2"><u>Health Care Point </u> </h4>

                                                <hr>
                                            </div>
                                <div class="col-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                
                                                <div class="pl-xl-3 mt-3 mt-xl-0">
                                                    
                                                    <p class="mb-3">Patient's Name : <?php echo $row->lab_pat_name;?></p>
                                                    <hr>
                                                    <p>Patient Number : <?php echo $row->lab_pat_number;?></p>
                                                    <hr>
                                                    <p >Patient Ailment : <?php echo $row->lab_pat_ailment;?></p>
                                                    <hr>
                                                    <p>Date Recorded : <?php echo date("d/m/Y - h:m:s", strtotime($mysqlDateTime));?></p>
                                                    <hr>
                                                    <h3>Laboratory Test Details:</h3>
                                                    <hr>
                                                    <p>
                                                        <?php echo $row->lab_pat_tests;?>
                                                    </p>
                                                    <hr>
                                                    <h3 class="align-centre">Laboratory Result:</h3>
                                                    <p class="text-muted mb-4">
                                                        <?php echo $row->lab_pat_results;?>
                                                    </p>
                                                    <hr>
                                                    <div class="text-right d-print-none">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Print</a>
                                            </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->
                            
                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- Footer Start -->
                        <?php include('assets/inc/footer.php');?>
                    <!-- end Footer -->

                </div>
            <?php }?>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>