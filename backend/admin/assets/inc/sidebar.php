<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="dashboard.php">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fab fa-accessible-icon "></i>
                        <span> Patients </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="register_patient.php">Register Patient</a>
                        </li>
                        <li>
                            <a href="view_patients.php">View Patients</a>
                        </li>
                        <li>
                            <a href="manage_patient.php">Manage Patients</a>
                        </li>
                        <!-- <li>
                            <a href="his_admin_patient_transfer.php">Patient Sample Transfers</a>
                        </li> -->
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-doctor"></i>
                        <span> Employees </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="add_employee.php">Add Employee</a>
                        </li>
                        <li>
                            <a href="view_employee.php">View Employees</a>
                        </li>
                        <li>
                            <a href="manage_employee.php">Manage Employees</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-cash-multiple "></i>
                        <span> Accounting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="payment.php">Payment</a>
                        </li>
                        <li>
                            <a href="view_payment_details.php">View Payment Details</a>
                        </li>
                        <!-- <li>
                            <a href="his_admin_add_acc_receivable.php">Add Acc. Receivable</a>
                        </li> -->
                        <li>
                            <a href="receivable_payment.php">Receivable Payment</a>
                        </li>
                        <li>
                            <a href="payment_salary_employee.php">Payment Employees</a>
                        </li>
                        <li>
                            <a href="manage_payment_employee.php">Employee Pay. Details</a>
                        </li>
                        <li>
                            <a href="generate_payment_slip.php">Generate Payment Slip</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class=" fas fa-funnel-dollar "></i>
                        <span> Inventory </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li>
                            <a href="pharm_inventory.php">Pharmaceuticals</a>
                        </li>

                        <li>
                            <a href="equipments_inventory.php">Equipment</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-share"></i>
                        <span> Reporting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="current_records.php">Current Patients Records</a>
                        </li>
                        <li>
                            <a href="oldpatient_records.php">Old Patient Records</a>
                        </li>
                        <li>
                            <a href="employee_records.php">Employee Records</a>
                        </li>
                        <li>
                            <a href="inventory_records.php">Inventory Records</a>
                        </li>
                        <li>
                            <a href="patient_test_record.php">Patients Tests Records</a>
                        </li>

                    </ul>
                </li>

                <!-- <li>
                    <a href="javascript: void(0);">
                        <i class="fe-file-text"></i>
                        <span> Medical Records </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="his_admin_add_medical_record.php">Add Medical Record</a>
                        </li>
                        <li>
                            <a href="his_admin_manage_medical_record.php">Manage Medical Records</a>
                        </li>

                    </ul>
                </li> -->

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-flask"></i>
                        <span> Laboratory Details </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="patient_lab_test.php">Patient Lab Tests</a>
                        </li>
                        <li>
                            <a href="patient_lab_result.php">Patient Lab Results</a>
                        </li>
                        <li>
                            <a href="health_infromation.php">Health Information</a>
                        </li>
                        <li>
                            <a href="lab_report.php">Lab Reports</a>
                        </li>
                    </ul>
                </li>

                <!--  -->
                <li>
                <?php
                $aid=$_SESSION['ad_id'];
                $ret="select * from his_admin where ad_id=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$aid);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
                ?>
                        <a href="../../index.php" class="fw-semibold">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>


                <?php }?>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>