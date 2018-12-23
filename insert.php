<?php
include 'config.php';
$username = $_POST['username'];
$book = $_POST['book'];
$ins = "INSERT INTO `books` (`id`, `username`, `bookname`, `date`) VALUES (NULL, '$username', '$book', CURRENT_TIMESTAMP);";
$query=mysqli_query($con,$ins);

?>