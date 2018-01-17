<?php
session_start();
header('Content-type: text/html; charset=utf-8');
/* regproc.php */
if(isset($_POST['btn-submit'])) {
	
	$val = array('name','email','password'
	);
	$val_s = array();
	foreach($val as $assoc) {
	$value = $_POST[$assoc];
	$value = stripslashes($value);
	$value = htmlentities($value);
	
	switch ($assoc):
	case 'password' :
		
	endswitch;
		
		$val_s[$assoc] = $value;
		
	if(strlen($value) > 0){
		
	
		/*echo'perfect!';
		echo '&nbsp;' . $value . '<br>';*/
	}
	else {
		echo 'err!';
		header("Location : register.php?e=ed");
	}
		
	}
	$ip = $_SERVER['REMOTE_ADDR'];
	$time = date("20y.M.d.D.H.i.s.T");
	
	require_once('salt.php');
	$val_s['salt'] = $salt;
	
	$val_s['ip'] = $ip;
	$val_s['time'] = $time;
	
	/* Salting the passwords */
$pwd = $val_s['password'];
$apc = $pwd.$salt.$pwd;
$pc = sha1($apc);
$pwd = NULL;
$val_s['cipher'] = $pc;

unset($val_s['password']);

$sql = "INSERT INTO `users`(name,email,cipher,salt,ip,datetime) VALUES ('$val_s[name]','$val_s[email]','$val_s[cipher]','$salt','$val_s[ip]','$val_s[time]')";		
	
	require_once('ntwk_pic.inc');
	
	if( mysqli_query($ntwk,$sql) ) {
		echo 'Success!'; echo mysqli_errno($ntwk);
		$_SESSION['user_online'] = TRUE;
		
		
		$query = "SELECT * FROM `users` WHERE email = '{$val_s['email']}' LIMIT 0 , 1";
		
		if ($result = mysqli_query($ntwk, $query) ) {
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	$_SESSION['user'] = $row;

	
		header("Location: profile.php");
		}
	}
	else { 
	echo 'Nope.'; echo mysqli_error($ntwk);
	$err =  mysqli_errno($ntwk);
	
	/*switch ($err) {
	case '1062' : header("Location: register.php?e=dv"); break;
	case '0' : break;
	}*/	
	}
	
	//($ntwk,$select_db,$sql);
}
else {
header("Location: register.php?e=ed");	
}
?>