<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("check.php");
if(isset($_GET['patient_id']) || isset($_GET['prescription'])){
    $patient_id=$_GET['patient_id'];
    $sql_id = "SELECT * FROM patient WHERE patient_id = ".$patient_id; 
                        $result_id = mysqli_query($conn, $sql_id);
                        if (mysqli_num_rows($result_id) > 0) {
                                while($row_id = mysqli_fetch_assoc($result_id)) {

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
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Export</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Patients </a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Export</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-lg-8 order-lg-1">
                                        <h4 class="mb-3">Patient Information</h4>
                                        
                                                <?php
                                                if (isset($_GET['prescription'])) {
                                                    ?>
                                                    <form class="needs-validation" novalidate="" action="add_prescription.php?".<?php echo $_GET['patient_id']?> method = "get">
                                                    <table>
                                                    
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" class="form-control" id="firstName" text = "" name = "fname" placeholder="" value="<?php echo $row_id['fname'];?>" required="" readonly >
                                                        <!-- <div class="invalid-feedback">
                                                            Valid first name is required.
                                                        </div> -->
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Last name</label>
                                                        <input type="text" class="form-control" id="lastName" name = "lname" placeholder="" value="<?php echo $row_id['lname'];?>" required="" readonly >
                                                        <!-- <div class="invalid-feedback">
                                                            Valid last name is required.
                                                        </div> -->
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Contact</label>
                                                        <input type="number" class="form-control" id="contact" placeholder="" name = "contact" value="<?php echo $row_id['phone'];?>" required="" readonly >
                                                        <!-- <div class="invalid-feedback">
                                                            Valid phone number is required.
                                                        </div> -->
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address" name = "address" placeholder="1234 Main St" value = "<?php echo $row_id['address'];?>" required="" readonly >
                                                    <!-- <div class="invalid-feedback">
                                                        Please enter your address.
                                                    </div> -->
                                                </div>

                                                <!-- Gender -->
                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">Gender</label>
                                                        
                                                        <?php 
                                                        switch ($row_id['gender']) {
                                                            case 'Male':
                                                        ?>
                                                        <select class="d-block w-100 default-select" id="gender" name = "gender" required="" readonly >
                                                            <option selected >Male</option>
                                                        </select>
                                                        <?php
                                                                break;
                                                                case 'Female':
                                                        ?>
                                                        <select class="d-block w-100 default-select" id="gender" name = "gender" required="" readonly >
                                                                    <option selected>Female</option>
                                                        </select>
                                                       
                                                        <?php
                                                                break;        
                                                            default:
                                                                # code...
                                                                break;
                                                        }
                                                            ?>
                                                        <!-- <div class="invalid-feedback">
                                                            Please select a valid country.
                                                        </div> -->
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="text-black font-w500" require>Medicine: </label><br>
                                                To select multiple, hold down the Ctrl key and select
                                                <select class="form-control" name="medicine[]" size="10" multiple="multiple">
                                                <?php
                                                $sql_medicine = "SELECT * FROM medicine"; 
                                                $result_medicine = mysqli_query($conn, $sql_medicine);
                                                if (mysqli_num_rows($result_medicine) > 0) {
                                                        while($row_medicine = mysqli_fetch_assoc($result_medicine)) {
                                                            ?>
                                                            <option value="<?php echo $row_medicine['medicine_id'];?>" ><?php echo "#ATC-".$row_medicine['medicine_id']." ".$row_medicine['medicine_name']; ?></option> 
                                                            <?php echo $row_medicine['medicine_id']." ".$row_medicine['medicine_name'];
                                                        }
                                                }
                                                ?>
                                                </select><br>
                                                </div>
                                                <?php
                                                }else {
                                                    ?>
                                                    <form class="needs-validation" novalidate="" action="fix_patient.php?".<?php echo $_GET['patient_id']?> method = "get">
<table>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">First name</label>
                                                        <input type="text" class="form-control" id="firstName" text = "" name = "fname" placeholder="" value="<?php echo $row_id['fname'];?>" required="" >
                                                        <!-- <div class="invalid-feedback">
                                                            Valid first name is required.
                                                        </div> -->
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Last name</label>
                                                        <input type="text" class="form-control" id="lastName" name = "lname" placeholder="" value="<?php echo $row_id['lname'];?>" required="">
                                                        <!-- <div class="invalid-feedback">
                                                            Valid last name is required.
                                                        </div> -->
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Contact</label>
                                                        <input type="number" class="form-control" id="contact" placeholder="" name = "contact" value="<?php echo $row_id['phone'];?>" required="">
                                                        <!-- <div class="invalid-feedback">
                                                            Valid phone number is required.
                                                        </div> -->
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address" name = "address" placeholder="1234 Main St" value = "<?php echo $row_id['address'];?>" required="">
                                                    <!-- <div class="invalid-feedback">
                                                        Please enter your address.
                                                    </div> -->
                                                </div>

                                                <!-- Gender -->
                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">Gender</label>
                                                        
                                                        <?php 
                                                        switch ($row_id['gender']) {
                                                            case 'Male':
                                                        ?>
                                                        <select class="d-block w-100 default-select" id="gender" name = "gender" required="">
                                                            <option value="">Choose...</option>
                                                            <option selected >Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                        <?php
                                                                break;
                                                                case 'Female':
                                                        ?>
                                                        <select class="d-block w-100 default-select" id="gender" name = "gender" required="">
                                                                    <option value="">Choose...</option>
                                                                    <option>Male</option>
                                                                    <option selected>Female</option>
                                                        </select>
                                                       
                                                        <?php
                                                                break;        
                                                            default:
                                                                # code...
                                                                break;
                                                        }
                                                            ?>
                                                        <!-- <div class="invalid-feedback">
                                                            Please select a valid country.
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <?php    
                                                }
                                                ?>

                                                
                                                <!-- Symptoms -->
                                                <!-- <hr class="mb-4">
                                                    <div>
                                                        <h4 class="mb-3">Symptoms</h4>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="same-address">Fever or chills</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Cough</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Headache</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Fatigue</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Shortness of breath or difficulty breathing</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Muscle or body aches</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">New loss of taste or smell</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Sore throat</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Congestion or runny nose</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Nausea or vomiting</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox" class="custom-control-input" id="">
                                                            <label class="custom-control-label" for="save-info">Diarrhea</label>
                                                        </div>
                                                    </div>
                                                <hr class="mb-4">-->

                                                <!-- Comorbidities -->
                                                <!-- <hr class="mb-4">
                                                <h4 class="mb-3">Comorbidities</h4>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="same-address">Older age</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Lung problems, including asthma</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Heart disease</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Brain and nervous system conditions</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Diabetes and obesity</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Cancer and certain blood disorders</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Weakened immune system</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Chronic kidney or liver disease</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Mental health conditions</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="">
                                                    <label class="custom-control-label" for="save-info">Down syndrome</label>
                                                </div>
                                                <hr class="mb-4"> -->

                                                <!-- Testing -->
                                                <!-- <hr class="mb-4">
                                                <h4 class="mb-3">Testing</h4>
                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">PCR Test</label>
                                                        <select class="d-block w-100 default-select" id="pcr_test" required="">
                                                            <option value="">Choose...</option>
                                                            <option>Positive</option>
                                                            <option>Negative</option>
                                                        </select>
                                                         <div class="invalid-feedback">
                                                            Please select a valid choice.
                                                        </div> 
                                                    </div>
                                                </div>-->
                                                <!-- <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">Quick Test</label>
                                                        <select class="d-block w-100 default-select" id="quick_test" required="">
                                                            <option value="">Choose...</option>
                                                            <option>Positive</option>
                                                            <option>Negative</option>
                                                        </select> -->
                                                        <!-- <div class="invalid-feedback">
                                                            Please select a valid choice.
                                                        </div> -->
                                                    <!-- </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-expiration">SPO2</label>
                                                        <input type="text" class="form-control" id="sp02" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Percent saturation of oxygen in the blood required
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-expiration">Respiratory rate</label>
                                                        <input type="text" class="form-control" id="res_rate" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Breaths per minute required
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <hr class="mb-4">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit" name = "patient_id" value = "<?php echo $patient_id ?>" onclick="check()">Save</button>
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Print</button>
                                            </table>
                                            
                                        </form>
                                    </div>
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
	

    <script src="./vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->


<?php 
                                       
                                    }
                                                            }else {
                                                                echo "no patient";
                                                            }
                                    }
?>
</body>

</html>