<?php
session_start();
// Login Script
error_reporting(E_ALL);
ini_set("display_error", 1);
$val = array('email','password');
	$val_s = array();
	foreach($val as $assoc) {
	$value = $_SESSION[$assoc];
	$value = stripslashes($value);
	$value = htmlentities($value);
	
	switch ($assoc):
	case 'password' :
		
	endswitch;
		
		$val_s[$assoc] = $value;
	}

$email = $val_s['email'];
$pass = $val_s['password'];

require_once('ntwk_pic.inc');
$query = "SELECT * FROM `users` WHERE email = '{$email}' LIMIT 0 , 1";
if ($result = mysqli_query($ntwk, $query) ) {
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$cipher = $row['cipher'];
	$salt = $row['salt'];
	
}
	/* Salting the passwords */
$pwd = $val_s['password'];
$apc = $pwd.$salt.$pwd;
$pc = sha1($apc);
$pwd = NULL;
$val_s['cipher'] = $pc;

if($cipher == $pc) {
	$log = 1;
}
else {
	$log = 0;
}

if($log == 1) {
	//header("Location : /../Pixa ");
	$_SESSION['user'] = $row['name'];
	echo '<script>document.location ="/../Pixa";</script>';
}	
else {
	echo $cipher; echo "<br />";
	echo $pc;
}

?>