<?php
include("connection.php");
session_start();
$user_name = $_SESSION['login_user'];
$id = $_GET['id'];
$sql = "UPDATE servicerequest SET status = 'Completed' WHERE requestID = $id";

if (mysqli_query($conn, $sql)){
  mysqli_close($conn);
  echo '<script language="javascript">';
  echo 'alert("Marked as Completed!")';
  echo '</script>';
  echo  "<script> window.location.assign('ViewRequestsSU.php'); </script>";
} else {
  echo "Failed to Mark Request as Accepted!";
}
?>
