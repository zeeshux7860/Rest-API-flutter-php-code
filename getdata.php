<?php
include 'config.php';

$result = array();
$show = "SELECT * FROM `books`";
$query= mysqli_query($con,$show);
while($row = mysqli_fetch_array($query)){
	$result[]=$row;
}
echo json_encode($result);

?>