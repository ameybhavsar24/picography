<?php
/* Connection to Host */
$ntwk = mysqli_connect('localhost', 'root', '1234');
if(!$ntwk)
{
	die("Database Connection Failed. Plz try again later." .mysqli_connect_error($ntwk));
	
}
/* Selection of Database */
$select_db = mysqli_select_db($ntwk, 'picography');
if(!$select_db)
{
	die("Database Selection Failed". mysqli_connect_errno($ntwk));
	
}
?>