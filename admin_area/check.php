<?php 
// session_start();
if(!isset($_SESSION['admin_email'])){
    header("location: http://localhost/B01-3/admin_area/login.php");
    //echo "<script>window.open('page-login.php','_self')</script>";
}
?>