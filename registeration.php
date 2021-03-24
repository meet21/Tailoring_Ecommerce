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

 $Username=$_POST['Username'];
 $Email=$_POST['Email'];
 $Password=$_POST['Password'];


 $q = "select * from signin where Email ='$Email' && Password='$Password' ";

 $result= mysqli_query($con, $q);

 $num =mysqli_num_rows($result);

 if($num==1){
 	echo" <script> alert('This user already exists') </script> ";
 }
 else{
 	$qy="insert into signin(Username,Email,Password) values ('$Username' , '$Email' , '$Password')";
 	mysqli_query($con,$qy);
 	header("Location:http://localhost//My%20project/account.html");
 }

?>