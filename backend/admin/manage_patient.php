<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid=$_SESSION['ad_id'];
if(isset($_GET['delete']))
{
    $id=intval($_GET['delete']);
    
    // Delete from his_patients
    $adn_his="DELETE FROM his_patients WHERE pat_id=?";
    $stmt_his = $mysqli->prepare($adn_his);
    $stmt_his->bind_param('i', $id);
    $stmt_his->execute();
    $stmt_his->close();

    // Delete from reg_patients
    $adn_reg="DELETE FROM reg_patients WHERE pat_id=?";
    $stmt_reg = $mysqli->prepare($adn_reg);
    $stmt_reg->bind_param('i', $id);
    $stmt_reg->execute();
    $stmt_reg->close();

    if($stmt_his && $stmt_reg)
    {
        $success = "Patients Records Deleted";
    }
    else
    {
        $err = "Try Again Later";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('assets/inc/head.php');?>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include('assets/inc/nav.php');?>
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        <?php include("assets/inc/sidebar.php");?>
        <!-- Left Sidebar End -->

        <!-- Start Page Content here -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title fs-3 fw-medium mt-1">Manage Patient Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title"></h4>
                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-12 text-sm-center form-inline">
                                            <div class="form-group">
                                                <input id="demo-foo-search" type="text" placeholder="Search"
                                                    class="form-control form-control-sm" autocomplete="on">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-toggle="true">Patient</th>
                                                <th data-hide="phone">Patient ID</th>
                                                <th data-hide="phone">Address</th>
                                                <th data-hide="phone">Category</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $ret = "SELECT 
                                            pat_id, 
                                            pat_fname, 
                                            pat_lname, 
                                            pat_dob, 
                                            pat_age, 
                                            pat_number, 
                                            pat_addr, 
                                            pat_phone, 
                                            pat_type 
                                        FROM his_patients 
                                        UNION 
                                        SELECT 
                                            pat_id, 
                                            pat_fname, 
                                            pat_lname, 
                                            pat_dob, 
                                            pat_age, 
                                            pat_number, 
                                            pat_addr, 
                                            pat_phone, 
                                            pat_type 
                                        FROM reg_patients 
                                        ORDER BY RAND()"; 
                                                //sql code to get to ten docs  randomly
                                                $stmt= $mysqli->prepare($ret) ;
                                                $stmt->execute() ;//ok
                                                $res=$stmt->get_result();
                                                $cnt=1;
                                                while($row=$res->fetch_object())
                                                {
                                            ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo $cnt;?></td>
                                                <td><?php echo $row->pat_fname;?> <?php echo $row->pat_lname;?></td>
                                                <td><?php echo $row->pat_number;?></td>
                                                <td><?php echo $row->pat_addr;?></td>
                                                <td><?php echo $row->pat_type;?></td>

                                                <td>
                                                    <a href="view_single_patient.php?pat_id=<?php echo $row->pat_id;?>&&pat_number=<?php echo $row->pat_number;?>"
                                                        class="btn btn-xs btn-success"><i class="mdi mdi-eye"></i>
                                                        View</a>
                                                    <a href="update_single_patient.php?pat_id=<?php echo $row->pat_id;?>"
                                                        class="btn btn-xs btn-info"><i
                                                            class="mdi mdi-check-box-outline "></i> Update</a>
                                                    <a href="manage_patient.php?delete=<?php echo $row->pat_id;?>"
                                                        class="btn btn-xs btn-danger"><i
                                                            class=" mdi mdi-trash-can-outline "></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php  $cnt = $cnt +1 ; }?>
                                        <tfoot>
                                            <tr class="active">
                                                <td colspan="8">
                                                    <div class="text-right">
                                                        <ul
                                                            class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0">
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-box -->
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

    <!-- Footable js -->
    <script src="assets/libs/footable/footable.all.min.js"></script>

    <!-- Init js -->
    <script src="assets/js/pages/foo-tables.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>