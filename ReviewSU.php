<?php
include("connection.php");
session_start();
$user_name = $_SESSION['login_user'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$choice = $_POST['requestID'];
$inputComment = $_POST['review'];
$sql = "UPDATE servicerequest SET review = '$inputComment' WHERE requestID = $choice";

if (mysqli_query($conn, $sql)){
  mysqli_close($conn);
  echo '<script language="javascript">';
  echo 'alert("Reviewed!")';
  echo '</script>';
  echo  "<script> window.location.assign('ViewReviewSU.php'); </script>";
} else {
  echo "Failed to Review!";
}
?>
