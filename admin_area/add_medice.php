<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    include("includes/db.php");

    if(!isset($_GET['add_patient'])){
        $atc = $_GET['atc'];
        $name = $_GET['name_medice'];
        $expiration_date = $_GET['expiration_date'];
        $price = $_GET['price'];
        $effect = $_GET['effect'];

        if ( $atc == ""&& $name == "" && $price =="" && $effect == "" && $expiration_date == ""){
            echo "<script>alert('Please fill in all the fields')</script>";
            echo "<script>window.open('medicine.php','_self')</script>";
        }else {
            $sql = "INSERT INTO `medicine`(`medicine_id`, `medicine_name`, `price`, `expiration_date`) VALUES ('".$atc."','".$name."','".$price."','".$expiration_date."')";
                                    if (mysqli_query($conn, $sql)){
                                        //Thông báo nếu thành công
                                        echo 'Thêm thành công';
                                        //echo "<script>alert('Add patient success')</script>";
                                        $sql_id = "SELECT * FROM `medicine` WHERE medicine_id = '".$atc."' AND medicine_name = '".$name."' AND price = '".$price."' AND expiration_date = '".$expiration_date."'";
                                        $result_id = mysqli_query($conn, $sql_id);
                                        if (mysqli_num_rows($result_id) > 0) {
                                                while($row = mysqli_fetch_assoc($result_id)) {
                                                    $sql_medicine_effect = "INSERT INTO `medicine_effect`(`medicine_id`, `effect`) VALUES ('".$row['medicine_id']."','".$effect."')";
                                                    if (mysqli_query($conn, $sql_medicine_effect)){
                                                        //Thông báo nếu thành công
                                                        echo "<script>alert('Add medicine success')</script>";
                                                        echo "<script>window.open('medicine.php','_self')</script>";
                                                    }else{
                                                        //Hiện thông báo khi không thành công
                                                        echo "<script>alert('Add medicine success')</script>";
                                                        echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                                        }

                                            }
                                        }
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