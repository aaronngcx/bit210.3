<?php
include("connection.php");
session_start();
$user_name = $_SESSION['login_user'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$choice = $_POST['requestID'];
$inputComment = $_POST['review'];

if(isset($_POST['submit']))
{
  $sql = "SELECT * FROM servicerequest WHERE requestID=$choice";
  $result = mysqli_query($conn,$sql);

   header('refresh:0;url=reviewrequestssu.php');
     if(mysqli_num_rows($result) > 0){
       $sql = "UPDATE servicerequest SET review = '$inputComment' WHERE requestID = $choice";
     }

    echo "<script type='text/javascript'>alert('Your review has been posted!')</script>";
    mysqli_query($conn, $sql);
    //mysqli_close($conn);

}
 ?>
