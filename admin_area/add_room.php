<?php
    session_start();
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    include("includes/db.php");
    $date = date("Y-m-d H:i:s");
    switch ($_GET['status']) {
        case "add":
            $sql = "INSERT INTO `assign`(`patient_id`, `staff_id`, `room`, `date_assign`) VALUES ('".$_GET['patient_id']."','".$_SESSION['admin_id']."','".$_GET['room']."','".$date."');";
            if (mysqli_query($conn, $sql)){
                //Thông báo nếu thành công
                $sql = "INSERT INTO `patient_room`(`patient_id`, `room`, `date_room`) VALUES ('".$_GET['patient_id']."','".$_GET['room']."','".$date."');";
                if (mysqli_query($conn, $sql)){
                    //Thông báo nếu thành công
                    echo 'Thêm thành công';
                    echo "<script>alert('Add employee successfully')</script>";
                    echo "<script>window.open('table-datatable-basic.php?status=all','_self')</script>";
                    //echo "<script>alert('Add patient success')</script>";
                    }
                    else{
                    //Hiện thông báo khi không thành công
                    echo 'Không thành công. Lỗi' . mysqli_error($conn);
                    }
                echo 'Thêm thành công';
                //echo "<script>alert('Add patient success')</script>";
                }
                else{
                //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn);
                }

          break;
        case "fix":
            $sql = "DELETE FROM `assign` WHERE `patient_id` =".$_GET['patient_id'].";";
                if (mysqli_query($conn, $sql)){
                    //Thông báo nếu thành công
                    echo 'Thêm thành công';
                    echo "<script>alert('Add employee successfully')</script>";
                    echo "<script>window.open('table-datatable-basic.php?status=all','_self')</script>";
                    //echo "<script>alert('Add patient success')</script>";
                    }
                    else{
                    //Hiện thông báo khi không thành công
                    echo 'Không thành công. Lỗi' . mysqli_error($conn);
                    }

            $sql = "INSERT INTO `assign`(`patient_id`, `staff_id`, `room`, `date_assign`) VALUES ('".$_GET['patient_id']."','".$_SESSION['admin_id']."','".$_GET['room']."','".$date."');";
            if (mysqli_query($conn, $sql)){
                //Thông báo nếu thành công
                $sql = "INSERT INTO `patient_room`(`patient_id`, `room`, `date_room`) VALUES ('".$_GET['patient_id']."','".$_GET['room']."','".$date."');";
                if (mysqli_query($conn, $sql)){
                    //Thông báo nếu thành công
                    echo 'Thêm thành công';
                    echo "<script>alert('Add employee successfully')</script>";
                    echo "<script>window.open('table-datatable-basic.php?status=all','_self')</script>";
                    //echo "<script>alert('Add patient success')</script>";
                    }
                    else{
                    //Hiện thông báo khi không thành công
                    echo 'Không thành công. Lỗi' . mysqli_error($conn);
                    }
                echo 'Thêm thành công';
                //echo "<script>alert('Add patient success')</script>";
                }
                else{
                //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn);
                }
          break;
        // case "green":
        //   echo "Your favorite color is green!";
        //   break;
        default:
          echo "ERROR: Unknown status";
      }
