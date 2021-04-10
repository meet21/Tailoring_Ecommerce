<?php
 
 session_start();

 $con =mysqli_connect('localhost','root');
 if($con){
 	echo"<script> alert('connection successful')</script>";
 }
 else{
 	echo "error";
 }

 mysqli_select_db($con,'test');

 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $address2 = $_POST['address2'];
 $zip = $_POST['zip'];
 $cc_name = $_POST['cc_name'];
 $cc_number = $_POST['cc_number'];
 $cc_expiration = $_POST['cc_expiration'];
 $cc_cvv = $_POST['cc_cvv'];
