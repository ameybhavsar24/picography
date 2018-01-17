<?php
if(isset($_GET['btn'])){
$a = $_GET['a'];
$b = $_GET['b'];
for($r = $a % $b; $r=0; $a = $b,$b = $r)
{
var_dump($r);
	
}
}
?>
<html>
<meta charset='utf-8' />
<form method='GET'>
<input type='text'  name='a'/>
<input type='text'  name='b'/>
<input type='submit' name='btn' />
</form>
</html>