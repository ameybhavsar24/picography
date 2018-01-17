<?php
$uname = '';
$time =  time();
$nfilename =  '20' . date('y.m.d.h.s',$time) . $uname;
$target_dir = 'uploads/';
$target_file = $target_dir . basename( $_FILES['fileToUpload']['name']) ;
$uploadOk = 1;
$imageFiletype = 
pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or a fake image
if(isset($_POST['submit']))
{
	$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
	if($check !== false) {
		echo "File is an image - " . $check['mime'] . ".";
			$uploadOk = 1;
	}	else	{
		echo "File is not an image.";
		$uploadOk = 0;
		
	}
	/*if(file_exists($target_file))
	{
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}*/
	if($_FILES["fileToUpload"]["size"] > 50000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	if($imageFiletype != "jpg" && 
	$imageFiletype != "png" &&
	$imageFiletype != "jpeg" &&
	$imageFiletype != "gif" &&
	$imageFiletype != "bmp")
	{
		echo "Sorry, only JPG,JPEG,PNG,GIF & BMP files are allowed to be uploaded.";
		$uploadOk = 0;
	}
	if($uploadOk == 0)
	{
		echo 'Sorry, your file was not uploaded';
		// if everything is ok, try to upload the file
	} else {
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) {
		echo "The file ". basename($_FILES["fileToUpload"]["name"]) . " has been uploaded." . $target_dir ."&nbsp;". $target_file;
		}
		else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>