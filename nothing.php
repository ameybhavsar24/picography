<?php
/* Connection to Host */
$ntwk = mysql_connect('localhost', 'root', '1234');
if(!$ntwk)
{
	die("Database Connection Failed. Plz try again later." .mysqli_connect_errno($ntwk));
	
}
/* Selection of Database */
$select_db = mysql_select_db('md');
if(!$select_db)
{
	die("Database Selection Failed". mysqli_connect_errno($ntwk));
	
}
$result = mysql_query("SELECT id,name FROM users");
echo "<table border='1'>";
while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	printf("<tr><td> %s </td><td>Name: %s</td>", $row['id'],$row['name'] . "</tr>");
}
echo "</table>";
?>