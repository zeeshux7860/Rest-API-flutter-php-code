<?php
include 'config.php';
$id = $_GET['id'];
$del = "DELETE FROM `books` WHERE `id` = '$id'";
$query= mysqli_query($con,$del);
?>