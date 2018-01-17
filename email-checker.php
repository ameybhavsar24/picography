<?php
if(isset($_POST['email'])) {
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) = 'xmlhttprequest' ) {
		die();
}
$mysqli = new mysqli('localhost','root','1234','picography');
if($mysqli->connect_error){
	die("Could Not connect to database");
}

	$username = filter_var($_POST['email'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	
	$statement = $mysqli->prepare("SELECT email FROM users WHERE email=?");
	$statement->execute();
	$statement->bind_result($email);
	if($statement->fetch()){
		die('Email not available <i class="fa fa-times" style="color:#C33"></i>');
	}else {
		die('Email Available <i class="fa fa-check" style="color: #00CC66;"></i>');
	}
}
?>