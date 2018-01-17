<?php
session_start();
if(isset($times)) {
$times = $_POST['times'];
for($i=1;$i <= $times; $i++) {
echo "<b><img src='img/apple.jpg' width='40%;' style=' border: 0.001em thin #FFF;'></img></b> ";
}
}
?>
<html>
<head>
<meta charset='utf-8'/>
</head>
<body>
<form method='POST' action='pics.php'>
<input type='integer' name='times' style='width: 60%; padding: 6px;' placeholder='How many times you want the pic?'/>
<input type='submit' value='Go =>'/>
</form>
</body>
</html>