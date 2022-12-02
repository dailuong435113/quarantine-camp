<?php
session_start();
include("includes/db.php");
include("includes/header.php");
include("check.php");
?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php

        include("includes/navhead.php");

        ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        <?php

        include("includes/main.php");

        ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php

        include("includes/sidebar.php");

        ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">Patient</h2>
                        <p class="mb-0">Patients List</p>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+New Patient</a>
                        <a href="http://localhost/B01-3/admin_area/table-datatable-basic.php?status=all" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>All</a>
                        <a href="http://localhost/B01-3/admin_area/table-datatable-basic.php?status=being_treatment" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Being treatment</a>
                        <a href="http://localhost/B01-3/admin_area/table-datatable-basic.php?status=recovered" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Recovered</a>
                    </div>
                </div>
                <!-- Add Order -->
                <div class="modal fade" id="addOrderModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Patient</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="add_patient.php" method="get">
                                    <div class="form-group">
                                        <label class="text-black font-w500" name="name">Patient Name</label>
                                        <input type="text" class="form-control" name="fname" placeholder="First name"><br>
                                        <input type="text" class="form-control" name="lname" placeholder="Last name">
                                        <br><label class="text-black font-w500" name="gender">Gender</label>
                                        <select name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500" require>Comorbidities</label><br>
                                        To select multiple, hold down the Ctrl key and select
                                        <select class="form-control" name="comorbidity[]" size="5" multiple="multiple">
                                            <option value="Older Age">Older Age</option>
                                            <option value="Lung problems, including asthma">Lung problems, including asthma</option>
                                            <option value="Heart disease">Heart disease</option>
                                            <option value=" Brain and nervous system conditions"> Brain and nervous system conditions</option>
                                            <option value="Diabetes and obesity">Diabetes and obesity</option>
                                            <option value="Cancer and certain blood disorders">Cancer and certain blood disorders</option>
                                            <option value="Weakened immune system"> Weakened immune system</option>
                                            <option value="Chronic kidney or liver disease">Chronic kidney or liver disease</option>
                                            <option value="Mental health conditionst">Mental health conditionst</option>
                                            <option value="Down syndrome">Down syndrome</option>
                                        </select><br>
                                        <input type="text" name="comorbidities_other" class="form-control" placeholder="Comorbidities other">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Symptoms</label><br>
                                        To select multiple, hold down the Ctrl key and select
                                        <select class="form-control" name="symptom[]" size="5" multiple="multiple">
                                            <option value="Cough">Cough</option>
                                            <option value="Headache">Headache</option>
                                            <option value="Fatigue">Fatigue</option>
                                            <option value="Shortness of breath or difficulty breathing"> Shortness of breath or difficulty breathing</option>
                                            <option value="Muscle or body aches">Muscle or body aches</option>
                                            <option value="Sore throat">Sore throat</option>
                                            <option value="Congestion or runny nose"> Congestion or runny nose</option>
                                            <option value="Nausea or vomiting">CNausea or vomiting</option>
                                            <option value="Diarrhea">Diarrhea</option>
                                        </select><br>
                                        <input type="text" class="form-control" name="symptoms_other" placeholder="Symptoms other">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Contact (Phone Number)</label>
                                        <input type="number" class="form-control" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="add_patient">CREATE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive card-table">
                                    <table id="example3" class="display min-w850 display dataTablesCard white-border table-responsive-xl">
                                        <thead>
                                            <tr>
                                                <!--<th></th>-->
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Doctor Assigned</th>
                                                <th>Contact</th>
                                                <th>Comorbidities</th>
                                                <th>Symptoms</th>
                                                <?php if ($_SESSION['admin_job'] == "Staff" || $_SESSION['admin_job'] == "Manager") {
                                                ?>
                                                    <th>Room</th>
                                                <?php
                                                } ?>

                                                <?php if ($_SESSION['admin_job'] == "Nurse" || $_SESSION['admin_job'] == "Manager") {
                                                ?>
                                                    <th>Take care</th>
                                                <?php
                                                } ?>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['status'])) {
                                                switch ($_GET['status']) {
                                                    case 'all':
                                                        $sql = "SELECT * FROM `patient` ";
                                                        break;

                                                    case 'being_treatment':
                                                        $sql = "SELECT * FROM patient 
                                                            INNER JOIN treatment on patient.patient_id = treatment.patient_id
                                                            WHERE date_end = ''";
                                                        break;

                                                    case 'recovered':
                                                        $sql = "SELECT * FROM patient 
                                                                INNER JOIN treatment on patient.patient_id = treatment.patient_id
                                                                WHERE date_end != ''";
                                                        break;

                                                    default:
                                                        # code...
                                                        break;
                                                }
                                            }
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    <tr>
                                                        <!--<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>-->
                                                        <td>#P-<?php echo $row["patient_id"];  ?></td>
                                                        <td><a href="patient-details.php?people_id=<?php echo $row["patient_id"]; ?>"><?php echo $row["lname"] . " " . $row["fname"] ?></td>
                                                        <td><?php echo $row["gender"]; ?></td>
                                                        <td>Dr. Sammy</td>
                                                        <td><a href="javascript:void(0);"><strong><?php echo $row["phone"]; ?></strong></a></td>
                                                        <td><a href="javascript:void(0);"><strong>
                                                                    <?php
                                                                    $sql_patient_comorbidity = "SELECT * FROM `patient_comorbidity`WHERE patient_id =" . $row["patient_id"];
                                                                    $result_patient_comorbidity = mysqli_query($conn, $sql_patient_comorbidity);

                                                                    if (mysqli_num_rows($result_patient_comorbidity) > 0) {
                                                                        // output data of each row
                                                                        while ($row_patient_comorbidity = mysqli_fetch_assoc($result_patient_comorbidity)) {
                                                                            echo $row_patient_comorbidity["comorbidity"] . "<br>";
                                                                        }
                                                                    } else {
                                                                        echo "Unrecord";
                                                                    }
                                                                    ?></strong></a></td>

                                                        <td><a href="javascript:void(0);"><strong>
                                                                    <?php
                                                                    $sql_patient_symtom = "SELECT * FROM `patient_symtom`WHERE patient_id =" . $row["patient_id"];
                                                                    $result_patient_symtom = mysqli_query($conn, $sql_patient_symtom);

                                                                    if (mysqli_num_rows($result_patient_symtom) > 0) {
                                                                        // output data of each row
                                                                        while ($row_patient_symtom = mysqli_fetch_assoc($result_patient_symtom)) {
                                                                            echo $row_patient_symtom["symtom"] . "<br>";
                                                                        }
                                                                    } else {
                                                                        echo "Unrecord";
                                                                    }
                                                                    ?></strong></a></td>


                                                        <?php if ($_SESSION['admin_job'] == "Staff" || $_SESSION['admin_job'] == "Manager") {
                                                            $sql_patient_room = "SELECT * FROM `assign`WHERE patient_id =" . $row["patient_id"];
                                                            $result_patient_room = mysqli_query($conn, $sql_patient_room);
                                                            if (mysqli_num_rows($result_patient_room) > 0) {
                                                                // output data of each row
                                                                while ($row_patient_room = mysqli_fetch_assoc($result_patient_room)) {
                                                                    // echo $row_patient_room["room"] . "<br>";
                                                        ?>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select class="form-control default-select" id="sel1" onchange="location = this.value;">
                                                                                <?php
                                                                                $sql_assign = "SELECT * FROM `assign` where patient_id =" . $row['patient_id'];
                                                                                $result_assign = mysqli_query($conn, $sql_assign);
                                                                                if (mysqli_num_rows($result_assign) > 0) {
                                                                                    while ($row = mysqli_fetch_assoc($result_assign)) {
                                                                                        $sql_room = "SELECT * FROM `room`";
                                                                                        $result_room = mysqli_query($conn, $sql_room);
                                                                                        if (mysqli_num_rows($result_room) > 0) {
                                                                                            while ($row_room = mysqli_fetch_assoc($result_room)) {
                                                                                                if ($row_room['room'] == $row['room']) {
                                                                                ?>
                                                                                                    <option value="#" selected>Room <?php echo $row_room['room']; ?></h2>
                                                                                                    </option>
                                                                                                <?php
                                                                                                } else {
                                                                                                ?>
                                                                                                    <option value="<?php echo "add_room.php?status=fix&patient_id=" . $row['patient_id'] . "&room=" . $row_room['room']; ?>">Room <?php echo $row_room['room']; ?></h2>
                                                                                                    </option>
                                                                                <?php
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        <?php    }
                                                                } else {
                                                                        ?>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select class="form-control default-select" id="sel1" onchange="location = this.value;">
                                                                                <option value="">Select</h2>
                                                                                </option>
                                                                                <?php
                                                                                //chọn phòng cho người chưa có
                                                                                $sql_room = "SELECT * FROM `room`";
                                                                                $result_room = mysqli_query($conn, $sql_room);
                                                                                if (mysqli_num_rows($result_room) > 0) {
                                                                                    while ($row_room = mysqli_fetch_assoc($result_room)) {

                                                                                        $sql_count_patient = "SELECT COUNT(room) as c FROM assign WHERE room = '" . $row_room['room'] . "';";
                                                                                        $result_count_patient = mysqli_query($conn, $sql_count_patient);
                                                                                        if (mysqli_num_rows($result_room) > 0) {
                                                                                            while ($row_count_room = mysqli_fetch_assoc($result_count_patient)) {
                                                                                                if ($row_count_room['c'] <= $row_room['limited_capacity']) {
                                                                                ?>
                                                                                                    <option value="<?php echo "add_room.php?status=fix&patient_id=" . $row['patient_id'] . "&room=" . $row_room['room']; ?>">Room <?php echo $row_room['room']; ?></h2>
                                                                                                    </option>
                                                                        <?php
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }

                                                                        ?>
                                                                            </select>
                                                                    </td>
                                </div>


                                <td>
                                    <?php if ($_SESSION['admin_job'] == "Nurse") {
                                                        $sql_nurse = "SELECT * FROM treatment INNER JOIN people_in_camp ON treatment.doctor_id = people_in_camp.people_in_camp_id WHERE patient_id = " . $row['patient_id'] . " AND doctor_id =" . $_SESSION['admin_id'];
                                                        $result_nurse = mysqli_query($conn, $sql_nurse);
                                                        if (mysqli_num_rows($result_nurse) > 0) {
                                                            while ($row_nurse = mysqli_fetch_assoc($result_nurse)) {
                                                                echo "Daily patient care";
                                                            }
                                                        } else {

                                                            $sql_un_nurse = "SELECT * FROM treatment INNER JOIN people_in_camp ON treatment.doctor_id = people_in_camp.people_in_camp_id WHERE patient_id = " . $row['patient_id'] . " AND people_in_camp.people_in_camp_job_type = 'Nurse';";
                                                            $result_un_nurse = mysqli_query($conn, $sql_un_nurse);
                                                            if (mysqli_num_rows($result_un_nurse) > 0) {
                                                                while ($row_un_nurse = mysqli_fetch_assoc($result_un_nurse)) {
                                                                    echo "#N-" . $row_un_nurse['people_in_camp_id'] . " " . $row_un_nurse['people_in_camp_fname'] . " " . $row_un_nurse['people_in_camp_lname'] . " Taking care";
                                                                }
                                                            } else {
                                    ?>
                                                <a href="http://localhost/B01-3/admin_area/add_care.php?patient_id=<?php echo $row['patient_id'];
                                                                                                                    ?>" class="btn btn-primary mr-3">Receive care</a>
                                    <?php
                                                            }
                                                        }
                                                    }

                                                    if ($_SESSION['admin_job'] == "Manager") {
                                                        echo "done";
                                                    }

                                    ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="http://localhost/B01-3/admin_area/ecom-checkout.php?patient_id=<?php echo $row["patient_id"]; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

                                        <div class="dropdown ml-auto text-right">
                                            <div class="btn-link" data-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="patient-details.php?people_id=<?php echo $row["patient_id"]; ?>"> View Detail</a>
                                                <a class="dropdown-item" href="test-covid.php?people_id=<?php echo $row["patient_id"]; ?>">Show all tests</a>
                                                <a class="dropdown-item" href="ecom-checkout.php?patient_id=<?php echo $row["patient_id"]; ?>&prescription=">Prescription</a>
                                                <a class="dropdown-item" href="patient-details.php?people_id=<?php echo $row["patient_id"]; ?>&discharge_from_hospital=">Discharge from hospital</a>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                </tr>
                        <?php
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                        ?>
                        </tbody>
                        </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    <?php

    include("includes/footer.php");

    ?>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
</body>

</html>