<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    include("includes/db.php");

    if(isset($_GET['add_test'])){
        $patient_id = $_GET['patient_id'];
        $people_id = $_GET['people_id'];
        $date = $_GET['date'];
        $testing_type = $_GET['testing_type'];
        $spo2 = $_GET['spo2'];
        $result = $_GET['result'];
        $respiratory_rate = $_GET['respiratory_rate'];

        if ( $patient_id == "" && $people_id == "" && $date =="" && $testing_type == "" && $spo2 == "" && $respiratory_rate == ""){
            echo "<script>alert('Please fill in all the fields')</script>";
            echo "<script>window.open('medicine.php','_self')</script>";
        }else {
                    $sql = "INSERT INTO `test`(`test_id`, `patient_id`, `employee_id`, `date_test`, `result`) VALUES ('','".$patient_id."','".$people_id."','".$date."','".$result."')";
                    if (mysqli_query($conn, $sql)){
                    //Thông báo nếu thành công
                    $sql_id = "SELECT test_id FROM `test` WHERE patient_id = '".$patient_id."' AND employee_id = '".$people_id."' AND date_test ='".$date."' AND result ='".$result."'";
                    echo $sql_id; 
                        $result_id = mysqli_query($conn, $sql_id);
                        if (mysqli_num_rows($result_id) > 0) {
                                while($row = mysqli_fetch_assoc($result_id)) {
                                        $id = $row['test_id']; 
                                        if ($testing_type == "pcr") {
                                            $sql = "INSERT INTO `test_covid`(`test_id`, `quick_test`, `pcr`, `rr`, `respiratory_rate`, `spo2`) VALUES ('".$id."','','yes','','".$respiratory_rate."','".$spo2."')";
                                            if (mysqli_query($conn, $sql)){
                                                //Thông báo nếu thành công
                                                echo 'Thêm thành công';
                                                echo "<script>alert('Add testing result successfully')</script>";
                                                echo "<script>window.open('test-covid.php','_self')</script>";
                                                }
                                                else{
                                                //Hiện thông báo khi không thành công
                                                echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                                }
                                        }else {
                                            $sql = "INSERT INTO `test_covid`(`test_id`, `quick_test`, `pcr`, `rr`, `respiratory_rate`, `spo2`) VALUES ('".$id."','yes','','','".$respiratory_rate."','".$spo2."')";
                                            if (mysqli_query($conn, $sql)){
                                            //Thông báo nếu thành công
                                            echo 'Thêm thành công';
                                            echo "<script>alert('Add testing result successfully')</script>";
                                            echo "<script>window.open('test-covid.php','_self')</script>";
                                            }
                                            else{
                                            //Hiện thông báo khi không thành công
                                            echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                            }
                                        }
                                        echo "\n".$sql;
                                    }
                                }
                            }
                        }
                                    


    }
    else {
        echo "error:".mysqli_error($conn);
    }
?>