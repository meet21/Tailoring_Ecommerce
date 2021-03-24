<?php
session_start();
unset($_SESSION['username']);
if(is_null($_SESSION['username']))
{
	header("Location: index.php");
}
?>