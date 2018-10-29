<?php
session_start();

echo "Logout Successfully";
session_destroy();
header("Location:index.html");
echo "<script type='text/javascript'>alert('You Have Successfully Signed Out')</script>";
 ?>
