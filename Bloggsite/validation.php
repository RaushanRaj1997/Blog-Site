<?php
include 'dbh.php';
 $email=$_POST['user_email'];
  $pass=$_POST['user_pass'];
 
 $q="select * from cs_user where user_email='$email' && user_password='$pass' ";
 $result=mysqli_query($conn,$q);
 $num=mysqli_num_rows($result);
 if($num == 0){
 	  header('location:registration.php');
 }
 else
 {
 	$_SESSION['user']=$_POST['user_email'];
 	header('location:home.php');
 }


?>