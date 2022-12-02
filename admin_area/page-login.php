<?php
include("includes/db.php");
include("includes/header.php");
//include("fucntion.php");
?>

<br><br><br><br>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Aurora Quarantine Camp</h4>
                                    <form method = "post" action="page-login.php">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" class="form-control" value="" name="people_id" placeholder="enter your username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="" name="password" placeholder="enter your password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <!-- <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1 text-white">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
                                            </div> -->
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block" name="admin_login">Sign In</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

</body>

</html>
<?php

if(isset($_POST['admin_login'])){
    $admin_email = mysqli_real_escape_string($conn,$_POST['people_id']);
                
    $admin_pass = mysqli_real_escape_string($conn,$_POST['password']);
    
    $get_admin = "select * from `people_in_camp` where people_in_camp_id='$admin_email' AND password=md5('$admin_pass')";
    
    $run_admin = mysqli_query($conn,$get_admin);
    
    $count = mysqli_num_rows($run_admin);
    
    $row_employee = mysqli_fetch_array($run_admin);
    if($count==1){
        session_start();
    $_SESSION['admin_email']=$row_employee['people_in_camp_fname']." ".$row_employee['people_in_camp_lname'];
    
    echo "<script>alert('You are Logged in into admin panel')</script>";
    echo "<script>window.open('index.php','_self')</script>";
    //header("location: index.php");
    }
    else {
    echo "<script>alert('Email or Password is Wrong')</script>";
    echo "<script>window.open('page-login.php','_self')</script>";
    //header("location: page-login.php");
    }   
}
?>