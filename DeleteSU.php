<?php
include("connection.php");
$id = $_GET['id'];
$sql = "DELETE FROM servicerequest WHERE requestID = $id";

if (mysqli_query($conn, $sql)){
  mysqli_close($conn);
  echo '<script language="javascript">';
  echo 'alert("Request Cancelled!")';
  echo '</script>';
  echo  "<script> window.location.assign('ViewRequestsSU.php'); </script>";
} else {
  echo "Error deleting record";
}
?>
