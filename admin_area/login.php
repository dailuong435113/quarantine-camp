<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign Up</title>
    <link rel="icon" type="image/png" href="../images/A_logo.png">
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
<!-- <a href="#popup" class="trigger">Click</a> -->

<div id="popup" class="sign-overlay">
      <div class="sign-container">
         <a href="#" class="close">&times;</a>
         <div class="sign-form details">
            <form method = "get" action="login.php">
            <div class="signin">
               <h1 class="sign-title">Sign In</h1>
               <input type="text" name = "people_id" class="sinput" placeholder="Username" required>
               <input type="password" name="password" class="sinput" placeholder="Passwords" required>
               <!-- <input type="submit" name="admin_login" value= "Log In" class="form-submit" > -->
               <button type="submit" class="form-submit" name="admin_login">Sign In</button>
               <!-- <button class="form-submit">Log In</button> -->
               <!-- <span class="sign-ques">Not a member?<button id="signup">Create it now</button></span> -->
            </div>
            </form>
            <div class="signup">
               <h1 class="sign-title">Sign Up</h1>
               <input type="number" class="sinput" placeholder="Phone" required>
               <input type="text" class="sinput" placeholder="Username" required>
               <input type="password" class="sinput" placeholder="Password" required>
               <button class="form-submit">Create</button>
               <span class="sign-ques">Already have an account?<button id="signin">SignIn</button></span>
            </div>
         </div>

         <div class="sign-form content">
            <div class="signin">
               <h1 class="sign-title">5 things you need to know about COVID-19</h1>
               <p class="sign-text">1. Wash your hands frequently.</p><br>
               <p class="sign-text">2. Clean and disinfect frequently touched objects and surfaces.</p><br>
               <p class="sign-text">3. Cover your face and stay home if you are sick.</p><br>
               <p class="sign-text">4. Get your information from experts.</p><br>
               <p class="sign-text">5. Maintain your overall health.</p>
            </div>

            <div class="signup">
               <h1 class="sign-title">Welcome to AQC!</h1>
               <p class="sign-text-warn">Warning: Declaring false information is a violation of Vietnamese law and may be subject to criminal handling </p>
            </div>
         </div>
      </div>
   </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
   $('.signup').hide();

   $('#signin, #signup').on(
      'click',
      function(){
         $('.signin, .signup').toggle();
      }
   )
</script>
</sign-container>


<?php
include("includes/db.php");

if(isset($_GET['admin_login'])){
      $admin_email = mysqli_real_escape_string($conn,$_GET['people_id']);
                
    $admin_pass = mysqli_real_escape_string($conn,$_GET['password']);
    
    $get_admin = "select * from `people_in_camp` where people_in_camp_id='$admin_email' AND password=md5('$admin_pass')";
    
    $run_admin = mysqli_query($conn,$get_admin);
    
    $count = mysqli_num_rows($run_admin);
    
    $row_employee = mysqli_fetch_array($run_admin);
    if($count==1){
    session_start();
    $_SESSION['admin_id'] = $row_employee['people_in_camp_id'];
    $_SESSION['admin_email']=$row_employee['people_in_camp_fname']." ".$row_employee['people_in_camp_lname'];
    $_SESSION['admin_job'] = $row_employee['people_in_camp_job_type'];
    
    echo "<script>alert('You are Logged in into admin panel')</script>";
    echo "<script>window.open('index.php','_self')</script>";
    //header("location: index.php");
    }
    else {
    echo "<script>alert('Email or Password is Wrong')</script>";
    echo "<script>window.open('login.php','_self')</script>";
    //header("location: page-login.php");
    }   
}
?>
</body>
</html>