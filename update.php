<?php
include 'config.php';
$id = $_POST['id'];
$username = $_POST['username'];
$book = $_POST['book'];
$ins = "UPDATE `books` SET `username`='$username',`bookname`='$book' WHERE `id` = '$id'";
$query=mysqli_query($con,$ins);

?>