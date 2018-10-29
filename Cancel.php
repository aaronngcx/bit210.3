<?php
include("connection.php");
session_start();
$user_name = $_SESSION['login_user'];
$id = $_GET['id'];
$sql = "UPDATE servicerequest SET status = 'Pending', assignedTo = '' WHERE requestID = $id";

if (mysqli_query($conn, $sql)){
  mysqli_close($conn);
  echo '<script language="javascript">';
  echo 'alert("Request has been unassigned!")';
  echo '</script>';
  echo  "<script> window.location.assign('ViewAcceptedSP.php'); </script>";
} else {
  echo "Failed to Unassign Request!";
}
?>
