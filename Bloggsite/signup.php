<?php
   include 'dbh.php';
  $email=$_POST['user_email'];
  $pass=$_POST['user_pass'];
 
 $q="select * from cs_user where user_email='$email' && user_password='$pass' ";
 $result=mysqli_query($conn,$q);
 $num=mysqli_num_rows($result);
 if($num==1){
 	header('location:registration.php');
 }else{
 	$qy="insert into cs_user(user_email,user_password) values('$email','$pass')";
 	mysqli_query($conn,$qy);
 	header('location:registration.php');
 }
?>