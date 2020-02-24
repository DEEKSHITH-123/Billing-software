<?php

session_start(); 

$con=mysqli_connect("localhost","root","","admin");

$uname=$_POST["uname"];
$pass=$_POST["pass"];

$s="select * from admin_login where USERNAME='$uname' and PASSWORD='$pass'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num>=1)
{
  session_start();
  $_SESSION['gctc']='true';
  header("location: Admin-page.html");
}

else
{
  header("location: wrong-Admin-login.html");
}
?>




