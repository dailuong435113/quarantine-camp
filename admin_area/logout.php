<?php

session_start();

session_destroy();

echo "<script>window.open('http://localhost/B01-3/admin_area/login.php','_self')</script>";

?>