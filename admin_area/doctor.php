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
				<div class="form-head d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Doctors</h2>
						<p class="mb-0">Doctors List</p>
					</div>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+New Doctor</a>
						<a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a>
					</div>
				</div>
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add employee</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="add_doctor.php" method="GET">
									<div class="form-group">
										<label class="text-black font-w500">Employee Name</label>
										<input type="first_name" class="form-control" name="fname" placeholder="First name"><br>
										<input type="last_name" class="form-control" name="lname" placeholder="Last name">
									</div>
									<!-- <div class="form-group">
										<label class="text-black font-w500">Doctor ID</label>
										<input type="text" class="form-control">
									</div> -->
									<div class="form-group">
									<label class="text-black font-w500">Gender</label>
										<select name="gender" class="form-control">
											<option value="">--select--</option>
											<option value="Male" >Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="form-group">
									<label class="text-black font-w500">Job type</label>
										<select name="job_type" class="form-control">
											<option value="">--select--</option>
											<option value="Doctor" >Doctor</option>
											<option value="Nurse">Nurse</option>
											<option value="Staff" >Staff</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Manager">Manager</option>
										</select>
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Contact (Phone Number)</label>
										<input type="number" name="contact" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Address</label>
										<input type="address" name = "address" class="form-control">
									</div>
									<!-- <div class="form-group">
										<label class="text-black font-w500">Date Check In</label>
										<input type="date" class="form-control">
									</div> -->
									<div class="form-group">
										<button type="submit" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard table-responsive-xl">
								<thead>
									<tr>
										<th>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkAll" required="">
												<label class="custom-control-label" for="checkAll"></label>
											</div>
										</th>
										<th>ID</th>
										<th>Name</th>
										<th>Job type</th>
										<th>Contact</th>
										<th>Boss</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php
									$sql = "SELECT * FROM  `people_in_camp`";
									$result = mysqli_query($conn, $sql);
									
									if (mysqli_num_rows($result) > 0) {
									  // output data of each row
									  while($row = mysqli_fetch_assoc($result)) {
									?>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
												<label class="custom-control-label" for="customCheckBox2"></label>
											</div>
										</td>
										<td><span class="text-nowrap"><?php
										switch ($row["people_in_camp_job_type"]) {
											case 'Doctor':
												echo "#D-".$row["people_in_camp_id"];  
												break;
												case 'Nurse':
													echo "#N-".$row["people_in_camp_id"];  
													break;
													case 'Staff':
														echo "#S-".$row["people_in_camp_id"];  
														break;
														case 'Volunteer':
															echo "#V-".$row["people_in_camp_id"];
															break;
															case 'Manager':
																echo "#M-".$row["people_in_camp_id"];  
																break;
										}?></span></td>
										<td><?php echo $row["people_in_camp_fname"]." ".$row["people_in_camp_lname"];  ?></td>
										<td><?php echo $row["people_in_camp_job_type"];  ?></td>
										<td><span class="text-nowrap"><?php echo $row["phone"];  ?></span></td>
										<td><span class="text-dark"><?php
										if ($row["doctor_boss"] == 1) {
											echo "Yes";
										}?></span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
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
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script>
		(function($) {
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);
	</script>
</body>
</html>