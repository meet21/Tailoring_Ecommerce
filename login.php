<?php
 session_start();

 $con =mysqli_connect('localhost','root');
 /*if($con){
 	echo"<script> alert('connection successful')</script>";
 }
 else{
 	echo "<script> alert('error')</script>";
 }*/

 mysqli_select_db($con,'test');

 $Email=$_POST['Email'];
 $Password=$_POST['Password'];

 $q = "select * from signin where Email ='$Email' && Password='$Password' ";

 $result= mysqli_query($con, $q);

 $num =mysqli_num_rows($result);

 if($num==1){
 	$_SESSION['username']=$Email;
 	echo"<script> alert('Login successful')</script>";
 	header("Location: index.php");
 }
 else{
 	echo"<script> alert('Incorrect Email or password')</script>";
 }

?>