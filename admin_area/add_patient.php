<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    include("includes/db.php");

    if(isset($_GET['add_patient'])){
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $gender = $_GET['gender'];
        $phone = $_GET['phone'];
        $address = $_GET['address'];
        $comorbidities_other = $_GET['comorbidities_other'];
        $symptoms_other = $_GET['symptoms_other'];
        $date = date("Y-m-d H:i:s");
        echo $fname.$lname.$gender.$phone.$address.$comorbidities_other.$symptoms_other;

    if($fname == "" && $lname == "" && $phone == "" && $address == ""){
            echo "Please fill in all the fields";
        }else {
        $sql_check = "SELECT * FROM patient WHERE fname = '".$fname."' AND lname = '".$lname."' AND phone = '".$phone."' AND address = '".$address."'";
        echo "\n".$sql_check;
        $result_check = mysqli_query($conn, $sql_check);
            if (mysqli_num_rows($result_check) > 0) {
                echo "<script>alert('This patient information already exists')</script>";
            }else {
                    $sql = "INSERT INTO `patient`(`patient_id`, `fname`, `lname`, `gender`, `address`, `phone`, `nurse_id`, `staff_id`, `from_where`, `Date_to`) VALUES ('','".$fname."','".$lname."','".$gender."','".$address."','".$phone."','','','','".$date."')";
                    echo "\n".$sql;
                    if (mysqli_query($conn, $sql)){
                    //Thông báo nếu thành công
                    $sql_id = "SELECT * FROM patient WHERE fname = '".$fname."' AND lname = '".$lname."' AND phone = '".$phone."' AND address = '".$address."' AND Date_to = '". $date."'";
                    echo $sql_id; 
                        $result_id = mysqli_query($conn, $sql_id);
                        if (mysqli_num_rows($result_id) > 0) {
                                while($row = mysqli_fetch_assoc($result_id)) {
                                        $id = $row['patient_id'];
                                        echo "\n".$row['patient_id'];
                                    //   echo $row['fname'];
                                    $comorbidity = $_GET['comorbidity'];
                                    foreach ($comorbidity as $comorbidity){ 
                                        $sql = "INSERT INTO `patient.comorbidity`(`patient_id`, `comorbidity`) VALUES ('".$row['patient_id']."','".$comorbidity."');";
                                        if (mysqli_query($conn, $sql)){
                                            //Thông báo nếu thành công
                                            echo 'Thêm thành công';
                                            //echo "<script>alert('Add patient success')</script>";
                                            }
                                            else{
                                            //Hiện thông báo khi không thành công
                                            echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                            }
                                        echo "\n".$sql;
                                    }

                                    
                                    $symptom = $_GET['symptom'];
                                    foreach ($symptom as $symptom){ 
                                    $sql = "INSERT INTO `patient.symtom`(`patient_id`, `symtom`, `date_symptom`) VALUES ('".$row['patient_id']."','".$symptom."','".$date."');";
                                    if (mysqli_query($conn, $sql)){
                                        //Thông báo nếu thành công
                                        echo 'Thêm thành công';
                                        //echo "<script>alert('Add patient success')</script>";
                                        }
                                        else{
                                        //Hiện thông báo khi không thành công
                                        echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                        }
                                    echo "\n".$sql;
                                    }

                                    
                                    if($comorbidities_other !=""){
                                        $sql = "INSERT INTO `patient.comorbidity`(`patient_id`, `comorbidity`) VALUES ('".$row['patient_id']."','".$comorbidities_other."');";
                                        if (mysqli_query($conn, $sql)){
                                            //Thông báo nếu thành công
                                            echo 'Thêm thành công';
                                            //echo "<script>alert('Add patient success')</script>";
                                            }
                                            else{
                                            //Hiện thông báo khi không thành công
                                            echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                            }
                                        echo "\n".$sql;
                                    }

                                    if($symptoms_other !=""){
                                        $sql = "INSERT INTO `patient.symtom`(`patient_id`, `symtom`, `date_symptom`) VALUES ('".$row['patient_id']."','".$symptoms_other."','".$date."');";
                                        if (mysqli_query($conn, $sql)){
                                            //Thông báo nếu thành công
                                            echo 'Thêm thành công';
                                            //echo "<script>alert('Add patient success')</script>";
                                            }
                                            else{
                                            //Hiện thông báo khi không thành công
                                            echo 'Không thành công. Lỗi' . mysqli_error($conn);
                                            }
                                        echo "\n".$sql;
                                    }
                        
                                }
                        }else {
                            echo "0 results";
                        }   
                    echo 'Thêm thành công';
                    echo "<script>alert('Add patient success')</script>";
                    echo "<script>window.open('table-datatable-basic.php','_self')</script>";
                    }
                    else{
                    //Hiện thông báo khi không thành công
                    echo 'Không thành công. Lỗi' . mysqli_error($conn);
                    }
                }
            }
        }

?>