<?php

session_start();

include("includes/db.php");
include("includes/header.php");


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
						<a href="index.php" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a>
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
                                        <option  value="Male">Male</option>
                                        <option  value="Female">Female</option>
                                        </select>
									</div>
									<div class="form-group">
                                    <label class="text-black font-w500" require>Comorbidities</label><br>
                                    To select multiple, hold down the Ctrl key and select
                                    <select class="form-control" name="comorbidity[]" size="5" multiple="multiple">
                                    <option value="Older Age" >Older Age</option>
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
									<input type="text" name="comorbidities_other" class="form-control" placeholder = "Comorbidities other">
									</div>
									<div class="form-group">
									<label class="text-black font-w500">Symptoms</label><br>
                                    To select multiple, hold down the Ctrl key and select
                                    <select class="form-control" name="symptom[]" size="5" multiple="multiple">
                                    <option value="Cough" >Cough</option>
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
                                                <th>Date Check In</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `patient` ";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                              // output data of each row
                                              while($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <!--<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>-->
                                                <td>#P-<?php echo $row["patient_id"];  ?></td>
                                                <td><a href="patient-details.php?people_id=<?php echo $row["patient_id"];?>"><?php echo $row["lname"]." ".$row["fname"] ?></td>
                                                <td><?php echo $row["gender"]; ?></td>
                                                <td>Dr. Sammy</td>
                                                <td><a href="javascript:void(0);"><strong><?php echo $row["phone"]; ?></strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>                                            
                                            <?php 
                                            $sql_patient_comorbidity = "SELECT * FROM `patient.comorbidity`WHERE patient_id =".$row["patient_id"];
                                            $result_patient_comorbidity = mysqli_query($conn, $sql_patient_comorbidity);
                                            
                                            if (mysqli_num_rows($result_patient_comorbidity) > 0) {
                                              // output data of each row
                                              while($row_patient_comorbidity = mysqli_fetch_assoc($result_patient_comorbidity)) {
                                                echo $row_patient_comorbidity["comorbidity"]."<br>";
                                            }
                                        } else {
                                        echo "0 results";
                                        }
                                            ?></strong></a></td>

                                        <td><a href="javascript:void(0);"><strong>                                            
                                            <?php 
                                            $sql_patient_symtom = "SELECT * FROM `patient.symtom`WHERE patient_id =".$row["patient_id"];
                                            $result_patient_symtom = mysqli_query($conn, $sql_patient_symtom);
                                            
                                            if (mysqli_num_rows($result_patient_symtom) > 0) {
                                              // output data of each row
                                              while($row_patient_symtom = mysqli_fetch_assoc($result_patient_symtom)) {
                                                echo $row_patient_symtom["symtom"]."<br>";
                                            }
                                        } else {
                                        echo "0 results";
                                        }
                                            ?></strong></a></td>
                                            
                                            
                                                <td>21/07/2021</td>
                                                <td>
													<div class="d-flex">
														<a href="http://localhost/B01-3/admin_area/ecom-checkout.php?patient_id=<?php echo $row["patient_id"];?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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