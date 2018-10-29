<?php
include("connection.php");
session_start();
$user_name = $_SESSION['login_user'];
$id = $_GET['id'];
$sql = "UPDATE servicerequest SET status = 'Accepted', assignedTo = '$user_name' WHERE requestID = $id";

if (mysqli_query($conn, $sql)){
  mysqli_close($conn);
  echo '<script language="javascript">';
  echo 'alert("Request Accepted!")';
  echo '</script>';
  echo  "<script> window.location.assign('ViewRequestsSP.php'); </script>";
} else {
  echo "Error Accepting Request!";
}
?>
