<!---<!DOCTYPE html>
<html>
<body>

<form action="imgupload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
---->
<?php
include 'config.php';
$image = $_FILES['image']['name'];
$imagepath = "img/".$image;
move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);
$ins = "UPDATE `books` SET `Picture`='$image'";
$query=mysqli_query($con,$ins);

?>