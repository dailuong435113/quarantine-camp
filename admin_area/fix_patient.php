<?php 
include("includes/db.php");
if(isset($_GET['patient_id'])){
    $patient_id = $_GET['patient_id'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $gender = $_GET['gender'];
    $phone = $_GET['contact'];
    $address = $_GET['address'];
    echo $patient_id.$fname.$lname.$gender.$phone.$address;


    $sql = "SELECT * FROM `patient` WHERE `patient_id` = '".$patient_id."'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $fname_old = $row['fname'];
        $lname_old = $row['lname'];
        $gender_old = $row['gender'];
        $phone_old = $row['phone'];
        $address_old = $row['address'];
      }
      echo $fname_old.$lname_old.$gender_old.$phone_old.$address_old;

      if ($fname!=$fname_old) {
        //Hiện thông báo khi thành công
        $sql = "UPDATE `patient` SET `fname`='".$fname."' WHERE patient_id =".$patient_id;
            if (mysqli_query($conn, $sql)){
                // echo "<script>alert('Successfully edited')</script>";
                // echo "<script>window.open('ecom-checkout.php?patient_id=".$patient_id."','_self')</script>";
            }
             else{
            //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn);
             }
      }
      
      if ($lname!=$lname_old) {
        //Hiện thông báo khi thành công
        $sql = "UPDATE `patient` SET `lname`='".$lname."' WHERE patient_id =".$patient_id;
            if (mysqli_query($conn, $sql)){
                // echo "<script>alert('Successfully edited')</script>";
                // echo "<script>window.open('ecom-checkout.php?patient_id=".$patient_id."','_self')</script>";
            }
             else{
            //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn);
             }
      }

      if ($gender!=$gender_old) {
        //Hiện thông báo khi thành công
        $sql = "UPDATE `patient` SET `gender`='".$gender."' WHERE patient_id =".$patient_id;
            if (mysqli_query($conn, $sql)){
                // echo "<script>alert('Successfully edited')</script>";
                // echo "<script>window.open('ecom-checkout.php?patient_id=".$patient_id."','_self')</script>";
            }
             else{
            //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn);
             }
      }

      if ($phone!=$phone_old) {
        //Hiện thông báo khi thành công
        $sql = "UPDATE `patient` SET `phone`='".$phone."' WHERE patient_id =".$patient_id;
            if (mysqli_query($conn, $sql)){
                // echo "<script>alert('Successfully edited')</script>";
                // echo "<script>window.open('ecom-checkout.php?patient_id=".$patient_id."','_self')</script>";
            }
             else{
            //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn);
             }
      }

      if ($address!=$address_old) {
        //Hiện thông báo khi thành công
        $sql = "UPDATE `patient` SET `address`='".$address."' WHERE patient_id =".$patient_id;
            if (mysqli_query($conn, $sql)){
                // echo "<script>alert('Successfully edited')</script>";
                // echo "<script>window.open('ecom-checkout.php?patient_id=".$patient_id."','_self')</script>";
            }
             else{
            //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn);
             }
      }
      echo "<script>alert('Successfully edited')</script>";
      echo "<script>window.open('ecom-checkout.php?patient_id=".$patient_id."','_self')</script>";

    } else{
        echo "0 results";
    }
}
?>