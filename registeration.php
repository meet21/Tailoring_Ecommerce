
<?php
 
 session_start();

 $con =mysqli_connect('localhost','root');
 if($con){
 	echo"<script> alert('you have been registered succesfully')</script>";
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
 	// echo" <script> alert('This user already exists') </script> ";
 }
 else{
 	$qy="insert into signin(Username,Email,Password) values ('$Username' , '$Email' , '$Password')";
 	mysqli_query($con,$qy);
 	header("Location:account.php");
 }

?>


<!-- mailing using hosting is quit easy as compared to mailing using local host  -->
 <!-- <?php
// $name = $_POST['name'];
// $email = $_POST['email'];
// $contact = $_POST['contact'];
// $subject = $_POST['subject'];
// $content="From: $name \n Email: $email \n contact: $contact";
// $recipient = "meet21bhalgamiya@gmail.com";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $content, $mailheader) or die("Error!");
// echo "Thank you for contacting us,our team will contact you shortly"