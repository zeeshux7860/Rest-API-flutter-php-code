<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ctechviral";
$con = mysqli_connect($host,$user,$pass,$db);
if(!$con){
	echo "not connected";
}
?>