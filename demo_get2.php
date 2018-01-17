<?php
$people = array(
'online'=>array('David', 'Amy'),
'offline'=>array('John','Rob','Jack'),
'away'=>array('Arthur','Daniel')
);
foreach($people as $status => $statuses) {
	if($status == 'online')
	{
		$color = '#CFC';
	}
	elseif($status == 'offline') {
		$color = '#F08080';
	}
	else {
		$color = '#00CED1';
	}
	foreach($statuses as $naam) {
		echo "<p style='background:  {$color};> '> The status is {$status} and name is {$naam}</p>";
	}
}
/* Connection to Host */
/*$ntwk = mysqli_connect('localhost', 'root', '1234');
if(!$ntwk)
{
	die("Database Connection Failed. Plz try again later." .mysqli_connect_errno($ntwk));
	
}
/* Selection of Database */
/*$select_db = mysqli_select_db($ntwk, 'picography');
if(!$select_db)
{
	die("Database Selection Failed". mysqli_connect_errno($ntwk));
	
}
$query = "INSERT INTO `users`(name) VALUES ('$fname $lname')";*/
?>