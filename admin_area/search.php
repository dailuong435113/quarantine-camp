<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admins  where admin_email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_name = $row_admin['admin_name'];

$admin_email = $row_admin['admin_email'];

$admin_image = $row_admin['admin_image'];

$admin_country = $row_admin['admin_country'];

$admin_job = $row_admin['admin_job'];

$admin_contact = $row_admin['admin_contact'];

$admin_about = $row_admin['admin_about'];


$get_products = "SELECT * FROM products";
$run_products = mysqli_query($con,$get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "SELECT * FROM customers";
$run_customers = mysqli_query($con,$get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_p_categories = "SELECT * FROM product_categories";
$run_p_categories = mysqli_query($con,$get_p_categories);
$count_p_categories = mysqli_num_rows($run_p_categories);


$get_total_orders = "SELECT * FROM customer_orders";
$run_total_orders = mysqli_query($con,$get_total_orders);
$count_total_orders = mysqli_num_rows($run_total_orders);


$get_pending_orders = "SELECT * FROM customer_orders WHERE order_status='pending'";
$run_pending_orders = mysqli_query($con,$get_pending_orders);
$count_pending_orders = mysqli_num_rows($run_pending_orders);

$get_completed_orders = "SELECT * FROM customer_orders WHERE order_status='Complete'";
$run_completed_orders = mysqli_query($con,$get_completed_orders);
$count_completed_orders = mysqli_num_rows($run_completed_orders);


$get_total_earnings = "SELECT SUM( due_amount) as Total FROM customer_orders WHERE order_status = 'Complete'";
$run_total_earnings = mysqli_query($con, $get_total_earnings);
$row = mysqli_fetch_assoc($run_total_earnings);                       
$count_total_earnings = $row['Total'];


$get_coupons = "SELECT * FROM coupons";
$run_coupons = mysqli_query($con,$get_coupons);
$count_coupons = mysqli_num_rows($run_coupons);


?>


<!DOCTYPE html>
<html>

<head>

<title>Admin</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<link rel="shortcut icon" href="../admin_area/admin_images/logomini.png" type="image/png">

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->
<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

    if (isset($_GET['txtDate_from'])) {
        $txtdate_from =$_GET['txtDate_from'];
    }else {
        $txtdate_from = "";
    }

    if (isset($_GET['txtDate_to'])) {
        $txtdate_to =$_GET['txtDate_to'];
    }else {
        $txtdate_to = date("Y-m-d");
    }

    if (isset($_GET['txtName'])) {
        $txtname=$_GET['txtName'];
    }else {
        $txtname = "";
    }


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Orders



</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Orders
<?php echo $txtdate_to; ?>
<form action='search.php' method='get'>
		Key words<input type='text' value='<?php echo $txtname;?>' name='txtName' placeholder="enter keywords">
        Date from: <input type='date' value='<?php echo $txtdate_from;?>' name='txtDate_from' placeholder="yyyy-mm-dd">
        Date to: <input type='date' value='<?php echo $txtdate_to;?>' name='txtDate_to' placeholder="yyyy-mm-dd">
		<input type='submit' value='Search'>
</form>

<a href="http://localhost/B01%20(1)/admin_area/search.php?txtName=+&txtDate=+"><input type='submit' value='All'></a> 

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Customer</th>
<th>Address</th>
<th>Invoice</th>
<th>Product</th>
<th>Qty</th>
<th>Size</th>
<th>Order Date</th>
<th>Delivery Date</th>
<th>Total Amount</th>
<th>Status</th>
<th>Action</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_orders = "SELECT * FROM pending_orders WHERE customer_address LIKE '%$txtname%' AND  delivery_date BETWEEN '$txtdate_from' AND '$txtdate_to';";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['order_id'];

$c_id = $row_orders['customer_id'];

$invoice_no = $row_orders['invoice_no'];

$product_id = $row_orders['product_id'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];

$order_status = $row_orders['order_status'];

$get_products = "select * from products where product_id='$product_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php 

$get_customer = "select * from customers where customer_id='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['customer_email'];

echo $customer_email;

 ?>
 </td>
<td><?php echo $row_customer['customer_address']; ?></td>
<td bgcolor="orange" ><?php echo $invoice_no; ?></td>

<td><?php echo $product_title; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td>
<?php

$get_customer_order = "SELECT * FROM customer_orders WHERE order_id = $order_id;";

$run_customer_order = mysqli_query($con,$get_customer_order);

$row_customer_order = mysqli_fetch_array($run_customer_order);

$order_date = $row_customer_order['order_date'];

$due_amount = $row_customer_order['due_amount'];

echo $order_date;

?>
</td>
<td><?php echo $row_customer_order['delivery_date']; ?></td>
<td>$<?php echo $due_amount; ?></td>
<?php

switch ($order_status) {


    case 'canceled':?>
        <td><?php
        echo $order_status='<div style="color:purple;">Canceled</div>';?>
        </td>
        <td></td>
          <?php break;

    case 'Complete':?>
        <td><?php
        echo $order_status='<div style="color:black;">Complete</div>';?>
        </td>
        <td></td>
        <?php   break;

    case 'pending':?>
        <td><?php
        ?><a href="update_status.php?order_delete=<?php echo $order_id; ?>" > <?php echo $order_status='<div style="color:red;">Pending</div>';
        ?></td>
    <td>
            <a href="order_delete.php?order_delete=<?php echo $order_id; ?>" >

            <i>Cancel</i> 

            </a>
    </td>
        <?php break;


    case 'processing':?>
        <td><?php
        ?><a href="update_status_complete.php?order_delete=<?php echo $order_id; ?>" > <?php echo $order_status='<div style="color:green;">Processing</div>';
        ?></td>
    <td>
            <a href="order_delete.php?order_delete=<?php echo $order_id; ?>" >

            <i>Cancel</i> 

            </a>
    </td>
        <?php break;
}
}
?>
</tr>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->
 <?php } ?>




</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>