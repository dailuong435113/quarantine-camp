<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("check.php");
$sql = "SELECT * FROM `patient` WHERE `patient_id`=".$_GET['people_id'];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
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
				<div class="form-head page-titles d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Patient Details</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Patient</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">#P-<?php echo $row["patient_id"];  ?></a></li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="dropdown mr-3">
							<a href="javascript:void(0)" class="btn btn-warning" data-toggle="dropdown" aria-expanded="false">
								In Treatment
								<i class="las la-angle-down ml-2 scale5"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="javascript:void(0);">Edit</a>
								<a class="dropdown-item" href="javascript:void(0);">Delete</a>
							</div>
						</div>
						<a href="ecom-checkout.php?people_id=<?php echo $row["patient_id"];?>" class="btn btn-outline-primary">Update Profile</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-9 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card details-card">
									<img src="images/bg.jpg" alt="" class="bg-img">
									<div class="card-body">
										<div class="d-sm-flex mb-3">
											<div class="img-card mb-sm-0 mb-3">	
												<img src="images/avatar/pro2.jpg" alt=""> 
												<div class="info d-flex align-items-center p-md-3 p-2 bg-primary">
													<svg class="mr-3 d-sm-inline-block d-none" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M28.75 12.5C28.7538 11.8116 28.568 11.1355 28.213 10.5458C27.8581 9.95597 27.3476 9.47527 26.7376 9.15632C26.1276 8.83737 25.4415 8.69248 24.7547 8.73752C24.0678 8.78257 23.4065 9.01581 22.8434 9.4117C22.2803 9.80758 21.837 10.3508 21.5621 10.9819C21.2872 11.613 21.1913 12.3076 21.2849 12.9896C21.3785 13.6715 21.6581 14.3146 22.0929 14.8482C22.5277 15.3819 23.101 15.7855 23.75 16.015V20C23.75 21.6576 23.0915 23.2473 21.9194 24.4194C20.7473 25.5915 19.1576 26.25 17.5 26.25C15.8424 26.25 14.2527 25.5915 13.0806 24.4194C11.9085 23.2473 11.25 21.6576 11.25 20V18.65C13.3301 18.3482 15.2323 17.3083 16.6092 15.7203C17.9861 14.1322 18.746 12.1019 18.75 10V2.5C18.75 2.16848 18.6183 1.85054 18.3839 1.61612C18.1495 1.3817 17.8315 1.25 17.5 1.25H13.75C13.4185 1.25 13.1005 1.3817 12.8661 1.61612C12.6317 1.85054 12.5 2.16848 12.5 2.5C12.5 2.83152 12.6317 3.14946 12.8661 3.38388C13.1005 3.6183 13.4185 3.75 13.75 3.75H16.25V10C16.25 11.6576 15.5915 13.2473 14.4194 14.4194C13.2473 15.5915 11.6576 16.25 10 16.25C8.34239 16.25 6.75268 15.5915 5.58058 14.4194C4.40848 13.2473 3.75 11.6576 3.75 10V3.75H6.25C6.58152 3.75 6.89946 3.6183 7.13388 3.38388C7.3683 3.14946 7.5 2.83152 7.5 2.5C7.5 2.16848 7.3683 1.85054 7.13388 1.61612C6.89946 1.3817 6.58152 1.25 6.25 1.25H2.5C2.16848 1.25 1.85054 1.3817 1.61612 1.61612C1.3817 1.85054 1.25 2.16848 1.25 2.5V10C1.25402 12.1019 2.01386 14.1322 3.3908 15.7203C4.76773 17.3083 6.6699 18.3482 8.75 18.65V20C8.75 22.3206 9.67187 24.5462 11.3128 26.1872C12.9538 27.8281 15.1794 28.75 17.5 28.75C19.8206 28.75 22.0462 27.8281 23.6872 26.1872C25.3281 24.5462 26.25 22.3206 26.25 20V16.015C26.9792 15.7599 27.6114 15.2848 28.0591 14.6552C28.5069 14.0256 28.7483 13.2726 28.75 12.5Z" fill="white"/>
													</svg>
													<div>
														<p class="fs-14 text-white op5 mb-1">Disease</p>
														<span class="fs-18 text-white">Cold & Flu</span>
													</div>
												</div>
											</div>
											<div class="card-info d-flex align-items-start">
												<div class="mr-auto pr-3">
													<h2 class="font-w600 mb-2 text-black"><?php echo $row["lname"]." ".$row["fname"] ?></h2>
													<p class="mb-2">#P-<?php echo $row["patient_id"];  ?></p>
													<span class="date">
													<i class="las la-clock"></i>
													Join on <?php echo $row["Date_to"];  ?></span>
													<i class="las la-clock"></i>
													Leave on date <?php $sql_date = "SELECT * FROM `treatment` WHERE `patient_id`=".$_GET['people_id'];
													$result_date = mysqli_query($conn, $sql_date);

													if (mysqli_num_rows($result_date) > 0) {
													// output data of each row
													while($row = mysqli_fetch_assoc($result)) {  
														echo $row["date_end"];
													}
													}else {
														echo "0 results";
													}
												
														?></span>
												</div>
												<span class="mr-ico bg-primary">
													<i class="las la-mars"></i>
												</span>
											</div>
										</div>
										<h4 class="fs-20 text-black font-w600">Story About Disease</h4>
										<p>
										It is important to take care of the patient, to be watched by the doctor, but it is a very painful and distressing time. For down to the smallest detail, no one should practice any kind of work unless he derives some benefit from it. Don't be angry, hurt, and blame in the joy of wanting to gray your hair out of pain in the hope of not having the same. As long as they are blinded by lust, they refuse to come out, they are guilty of abandoning their duties, soft in spirit, that is difficult.
										</p>
										
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-7 mb-sm-0 mb-3">
												<div class="d-flex">
													<i class="las la-map-marker text-primary fs-34 mr-3"></i>
													<div>
														<span class="d-block mb-1">Address</span>
														<p class="fs-18 mb-0 text-black"><?php echo $row["address"];?> <strong class="d-block"></strong></p>
													</div>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="map-bx">
													<img src="images/map.jpg" alt="">
													<a href="javascript:void(0)" class="btn btn-sm btn-primary p-1 fs-12">View in Fullscreen</a>
													<i class="las la-map-marker"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="row">
									<div class="col-lg-12 col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="media align-items-center">
													<i class="las la-phone fs-30 text-primary mr-3"></i>
													<div class="media-body">
														<span class="d-block mb-1">Phone</span>
														<p class="fs-18 mb-0 text-black"><?php echo $row["phone"];  ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="media align-items-center">
													<i class="las la-envelope-open fs-30 text-primary mr-3"></i>
													<div class="media-body">
														<span class="d-block mb-1">Email</span>
														<p class="fs-18 mb-0 text-black">info@mail.com</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
							// $sql = "SELECT * FROM `test` 
							// INNER JOIN `test_covid` ON test.test_id = test_covid.test_id 
							// INNER JOIN `people_in_camp` ON test.employee_id = people_in_camp.people_in_camp_id 
							// INNER JOIN `patient` ON test.patient_id = patient.patient_id
							// WHERE patient.patient_id = ".$_GET['people_id'];
							// $result = mysqli_query($conn, $sql);

							// if (mysqli_num_rows($result) = 0) {
							
							// }
								include("test-covid-patient.php");
						?>
					<!-- <div class="col-xl-3 col-xxl-12">
						<div class="row">
							<div class="col-xl-12 col-xxl-4 col-lg-5">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20 text-black mb-0">Assigned Doctor</h4>
										<div class="dropdown">
											<div class="btn-link" role="button" data-toggle="dropdown" aria-expanded="false">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Accept Patient</a>
												<a class="dropdown-item" href="#">Reject Order</a>
												<a class="dropdown-item" href="#">View Details</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="media mb-4 align-items-center">
											<img src="images/users/12.jpg" alt="" width="85" class="mr-3">
											<div class="media-body">
												<h3 class="fs-18 font-w600 mb-1"><a href="javascript:void(0)" class="text-black">Dr. Elisabeth Moss</a></h3>
												<span class="fs-14">Dentist</span>
												<ul class="stars">
													<li><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
													<li><i class="las la-star"></i></li>
													<li><i class="las la-star text-dark"></i></li>
												</ul>
											</div>
										</div>
										<div class="row">
											<div class="col-6">
												<a href="javascript:void(0)" class="btn btn-outline-dark mb-2 btn-sm d-block">Unassign</a>
											</div>
											<div class="col-6">
												<a href="javascript:void(0)" class="btn btn-primary light mb-2 btn-sm d-block">Check</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-xxl-8 col-lg-7">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div>
											<h4 class="fs-20 text-black mb-1">Patient Statistic</h4>
											<span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
										</div>
									</div>
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-xl-12 col-xxl-6 col-sm-6">
												<div id="pieChart"></div>
											</div>
											<div class="mt-4 col-xl-12 col-xxl-6 col-sm-6">
												<div class="d-flex mb-3 align-items-center">
													<span class="fs-12 col-6 p-0 text-black">
														<svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="19" height="19" fill="#5F74BF"/>
														</svg>
														Immunities
													</span>
													<div class="progress rounded-0 col-6 p-0">
														<div class="progress-bar rounded-0 progress-animated" style="width: 80%; height:6px;background:#5F74BF;" role="progressbar">
															<span class="sr-only">60% Complete</span>
														</div>
													</div>
												</div>
												<div class="d-flex mb-3 align-items-center">
													<span class="fs-12 col-6 p-0 text-black">
														<svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="19" height="19" fill="#FFD439"/>
														</svg>
														Stamina
													</span>
													<div class="progress rounded-0 col-6 p-0">
														<div class="progress-bar rounded-0 progress-animated" style="width: 40%; height:6px;background:#FFD439;" role="progressbar">
															<span class="sr-only">60% Complete</span>
														</div>
													</div>
												</div>
												<div class="d-flex mb-3 align-items-center">
													<span class="fs-12 col-6 p-0 text-black">
														<svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="19" height="19" fill="#FF6E5A"/>
														</svg>
														Heart Beat
													</span>
													<div class="progress rounded-0 col-6 p-0">
														<div class="progress-bar rounded-0 progress-animated" style="width: 90%; height:6px;background:#FF6E5A;" role="progressbar">
															<span class="sr-only">60% Complete</span>
														</div>
													</div>
												</div>
												<div class="d-flex align-items-center">
													<span class="fs-12 col-6 p-0 text-black">
														<svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="19" height="19" fill="#5FBF91"/>
														</svg>
														Colestrol
													</span>
													<div class="progress rounded-0 col-6 p-0">
														<div class="progress-bar rounded-0 progress-animated" style="width: 80%; height:6px;background:#5FBF91;" role="progressbar">
															<span class="sr-only">60% Complete</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20 text-black mb-0">Note for patient</h4>
										<a href="javascript:void(0)">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8684 8.09625C20.9527 8.25375 21 8.43375 21 8.625V18.75C21 21.2351 18.9862 23.25 16.5 23.25H4.125C3.504 23.25 3 22.746 3 22.125V1.875C3 1.254 3.504 0.75 4.125 0.75H13.125C13.3162 0.75 13.4963 0.797251 13.6538 0.881626L13.6571 0.883874C13.7449 0.929999 13.827 0.989626 13.9013 1.0605L13.9204 1.07962L20.6704 7.82962L20.6895 7.84875C20.7615 7.92413 20.82 8.00625 20.8673 8.09287L20.8684 8.09625ZM12 3H5.25V21H16.5C17.7431 21 18.75 19.9931 18.75 18.75V9.75H13.125C12.504 9.75 12 9.246 12 8.625V3ZM9.75 18.75H14.25C14.871 18.75 15.375 18.246 15.375 17.625C15.375 17.004 14.871 16.5 14.25 16.5H9.75C9.129 16.5 8.625 17.004 8.625 17.625C8.625 18.246 9.129 18.75 9.75 18.75ZM8.625 14.25H15.375C15.996 14.25 16.5 13.746 16.5 13.125C16.5 12.504 15.996 12 15.375 12H8.625C8.004 12 7.5 12.504 7.5 13.125C7.5 13.746 8.004 14.25 8.625 14.25ZM17.1592 7.5L14.25 4.59075V7.5H17.1592Z" fill="black"/>
											</svg>
										</a>
									</div>
									<div class="card-body pt-3">
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa</p>
									</div>
								</div>
							</div>
						</div>
					</div> -->
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
	
	<!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/patient-details.js"></script>
</body>
</html>

<?php
}
} else {
echo "0 results";
}
?>