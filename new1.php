<?php
/*Connection to Host */
$ntwk = mysqli_connect('localhost', 'root', '1234');
if(!$ntwk)
{
	die("Database Connection Failed. Plz try again later." .mysqli_connect_errno($ntwk));
	
}
/* Selection of Database */
$select_db = mysqli_select_db($ntwk, 'picography');
if(!$select_db)
{
	die("Database Selection Failed". mysqli_connect_errno($ntwk));
	
}

$name = $_POST['name'];
$sql = "INSERT INTO users (name) VALUES ('$name')";
if(mysqli_query($ntwk,$sql))
{ 
echo 'Record Added [Sucess:1]';
}
else 
{
	echo "Didn't Add Record [Failure:0]";
}
/*
$sql = "SELECT `name`,`email`,`username`,`sex` FROM `users`";
$result = mysqli_query($ntwk,$sql);*/
?>