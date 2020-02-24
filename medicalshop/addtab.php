<?php
error_reporting(0);
session_start(); 

$num=$_POST["num"];
$name=$_POST["name"];
$type=$_POST["type"];
$price=$_POST["price"];

$con=mysqli_connect("localhost","root","","admin");

$s="INSERT INTO MEDICINE VALUES('$num','$name','$type','$price')";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
header("location: Admin-page.html");

?>




