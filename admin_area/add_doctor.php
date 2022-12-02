<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    include("includes/db.php");

    if(!isset($_GET['add_doctor'])){
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $gender = $_GET['gender'];
        $job_type = $_GET['job_type'];
        $contact = $_GET['contact'];
        $address = $_GET['address'];

        if ( $fname == "" && $lname == "" && $gender =="" && $job_type == "" && $contact == "" && $address == ""){
            echo "<script>alert('Please fill in all the fields')</script>";
            echo "<script>window.open('medicine.php','_self')</script>";
        }else {
            $sql = "INSERT INTO `people_in_camp`(`people_in_camp_id`, `people_in_camp_fname`, `people_in_camp_lname`, `gender`, `address`, `phone`, `people_in_camp_job_type`, `doctor_boss`, `password`) 
                    VALUES ('','".$fname."','".$lname."','".$gender."','".$address."','".$contact."','".$job_type."','',md5('123456789'))";
                                    if (mysqli_query($conn, $sql)){
                                        //Thông báo nếu thành công
                                        echo 'Thêm thành công';
                                        echo "<script>alert('Add employee successfully')</script>";
                                        echo "<script>window.open('doctor.php','_self')</script>";
                                    }
                                        else{
                                        //Hiện thông báo khi không thành công
                                        echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                        }
                                    


        }
    }
    else {
        echo "error:";
    }
?>