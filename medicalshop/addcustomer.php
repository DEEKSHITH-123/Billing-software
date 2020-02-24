<?php
error_reporting(0);
session_start(); 

$num=$_POST["num"];
$name=$_POST["name"];
$con=mysqli_connect("localhost","root","","admin");

$s="INSERT INTO CUSTOMER VALUES('$name','$num')";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
header("location: Admin-page.html");

?>




