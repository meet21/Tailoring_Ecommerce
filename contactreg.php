<?php
 
 session_start();
$servername="localhost";
$user="root";
$password="";

//Creating connection
$con =new mysqli($servername,$user,$password);

if($con)
{
	echo " <script> alert('Thank you for contacting us,our team will contact you shortly') </script>";
}
else
{
	echo "error";
	 die("Connection failed: " . $conn->connect_error);
}
http://localhost//My%20project/contact.html
mysqli_select_db($con,'test');

$Name=$_POST['Name'];
$Contact=$_POST['Contact'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$Reviews=$_POST['Reviews'];

$sql= "INSERT INTO contact (Name,Contact,Email,Message,Reviews) VALUES ('$Name','$Contact','$Email','$Message','$Reviews')";

if ($con->query($sql) === TRUE) {
	echo " <script> alert('Thank you for contacting us,our team will contact you shortly') </script>";
	header("Location:http://localhost//My%20project/contact.html");
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();


?>