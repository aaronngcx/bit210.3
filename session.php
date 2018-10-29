<?php
include("connection.php");
$error='';

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, "medicare");

session_start();

$user_check=$_SESSION['login_user'];
$ses_sql= mysqli_query($conn, "SELECT username from serviceuser WHERE username='$user_check'")
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
if(!isset($login_session)){
  mysql_close($connection);
  header('Location: indexSU.php');
}
?>
