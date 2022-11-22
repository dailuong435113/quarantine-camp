<?php
include("includes/db.php");
    class functionmain{
        public $admin_login;
        public $people_id;
        public $password;
        public function __functionmain($admin_login, $people_id, $password){
                $this->admin_login = $admin_login;
                $this->people_id = $people_id;
                $this->password = $password;
            }


        public function login(){
            if($this->admin_login === TRUE){

                $admin_email = mysqli_real_escape_string($conn,$people_id);
                
                $admin_pass = mysqli_real_escape_string($conn,$password);
                
                $get_admin = "select * from `people_in_camp` where people_in_camp_id='$admin_email' AND password=md5('$admin_pass')";
                
                $run_admin = mysqli_query($conn,$get_admin);
                
                $count = mysqli_num_rows($run_admin);
                
                if($count==1){
                
                $_SESSION['admin_email']=$admin_email;
                
                echo "<script>alert('You are Logged in into admin panel')</script>";
                
                header("location: index.php");
                
                }
                else {
                
                echo "<script>alert('Email or Password is Wrong')</script>";
                header("location: page-login.php");
                }   
            }
        }
    }


?>