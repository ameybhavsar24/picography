<?php
if(isset($_GET['link'])){
	header("Location : index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
*{
font-family: Helvetica, sans-serif;
}
.dropbtn {
background-color: #4CAF50;
color: white;
padding: 16px;
font-size: 16px;
border: none;
border-radius: 4px;
cursor: pointer;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
transition: 0.15s;
}
.dropbtn:hover, dropbtn:focus {
background-color: #3e8e41;

}
.dropdown {
position: relative;
display: inline-block;
}
.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
max-height: 140px;
}
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}
.dropdown a:hover {
background-color: #f1f1f1;
}
.show{
display: block;
}
</style>
</head>
<body>
<div class='dropdown'>
<button onClick='myFunction()' onBlur='close_drop()' class='dropbtn'>Dropdown</button>
<div id='myDropdown' class='dropdown-content'>
<a href='#' onClick='val_drop()'>Home</a>
<a href='?link=about'>About</a>
<a href='#contact'>Contact</a>
<a href='#blog'>Blog</a>
</div>
</div>
<p id='demo'></p>
<script>
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}
function close_drop() {
var dropdown = 
	document.getElementById("myDropdown");
	if(dropdown.classList.contains('show')) {
	dropdown.classList.remove('show');
	}
} 

function val_drop() {
var c = document.getElementById('myDropdown').childNodes;
document.getElementById('demo').innerhtml = c[2].text;
}


</script>
</body>
</html>
