<?php
include("connection.php");
session_start();
$error='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name=$_POST['user_name'];
  $password=$_POST['password'];

  $usernameError="";
  $passwordError="";
  $conn = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($conn, "medicare");
  $query = mysqli_query($conn, "SELECT * FROM serviceprovider WHERE password='$password' AND user_name='$name'");
  $rows = mysqli_num_rows($query);
  if($rows ==1){
    echo '<script language="javascript">';
    echo 'alert("Logged In Successfully!")';
    echo '</script>';
    echo  "<script> window.location.assign('indexSP.php'); </script>";
	}
	else {
    $error = "Username or Password is invalid";
		}
	mysqli_close($conn);
	}

?>
