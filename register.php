<?php
session_start();
$homeLink = 'index.php';
$regLink = '#';
$logLink = 'login.php';
$supportLink = 'support.php';
$e = "";
if(isset($GET['e']))
	
{
	switch($_GET['e']) {
		
		case "ed":
		$e = "Enter your details.";
		break;
		
		case "dv":
		$e = "Email already exists";
		
		default:
		$e = "Try Again.";
		
	}
	
}
?>
<!doctype html> 
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="utf-8" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta theme-data="#111" />
<title>Picography</title>

<!-- Font Awesome Core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" />

<!-- Glyphicons -->
<link href="css/glyphicon.css" rel="stylesheet" />

<!-- Customized Bootstrap CSS with only the styles related to tags for better UI -->
<link href="css/bootstrap-custom.css" rel="stylesheet" />

<!-- Website's CSS. The rules in these stylesheet can overlap and/or provide new ones. -->
<link href="css/pg-style.css" rel="stylesheet" />

<link href='css/footer.css' rel='stylesheet' />

<!-- The favicon logo -->
<link href="img/favicon.png"  rel="shortcut icon" />

<!-- formsSub.css -->
<link href="css/formsSub.css" rel='stylesheet' />
<style>
#loading {
background: #FFF;
border: none;
border-radius: 6px;
width: 100%;
height: 100%;
position: fixed;
display: none;
text-align: center;
top: 0;
left: 0;
color: #c0c0c0;
z-index: 99;
padding-top: 100px;
}
#loading div.load-bar {
	z-index: 100;
	vertical-align: middle;
	font-size: 4em;
	height: 150px;
	width: 150px;
	margin: 0 auto;
	border: 16px solid #f3f3f3;
	border-bottom: 16px solid #C33;
	border-top: 16px solid #C33;
	border-radius: 50%;
	animation : loader-color 6s infinite linear;
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes loader-color {
	0% {
	border-top: 16px solid #C33;
   border-bottom: 16px solid #C33;
  }
  25% {
	  border-top: 16px solid #00cc66;
	  border-bottom: 16px solid #00cc66;
  }
  50% {
	  border-top: 16px solid #0096ff;
	  border-bottom: 16px solid #0096ff;
  }
  75% {
	  border-top: 16px solid #ffd700;
	  border-bottom: 16px solid #ffd700;
  }
  100% {
	  border-top: 16px solid #C33;
    border-bottom: 16px solid #C33;
  }
}
</style>
<script src="js/jquery-1.11.3.min.js"></script>
<script async src="js/main.js"></script>

<script>

	 $(document).ready(function() {
		 aler
	 }
	 );

	
				function loadDoc() {
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = 
						function() {
						if(this.readyState == 4 && this.status == 200) {
								document.getElementById("demo").innerHTML = this.responseText;
							}
						};
					xhttp.open("GET", "ajaxmain.txt", true);
					xhttp.send();
				}
				var emailip =  $("#email");
				emailip.keyup( function(e) {
					$.ajax({
						url : '';
				});
			</script>
				</head>
<body>


	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="siteNav">
    <div class="menubar">
<ul>
<li><a href="<?php echo $homeLink?>" style="color: #C33;"><button id="home"><span class="fa fa-home">&nbsp;</span>Home</button></a></li>
<li><a href="<?php echo $regLink?>" style="color:#00CC66;"><button id="reg"><span class="fa fa-user-plus">&nbsp;</span>Sign Up</button></a></li>
<li><a href="<?php echo $logLink?>" style="color: #0096FF"><button id="login"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Login</button></a></li>
<li><a href="<?php echo $supportLink?>" style="color: #FFD700;"><button id="support"><span class='glyphicon glyphicon-info-sign'>&nbsp;</span>Support</button></a></li>
<li><button id="close" onClick="menu(-2000);"><span class=" fa fa-close"></span></button></li>
</ul>
</div>

   	<div class="container">
        	<div class="navbar-header">
            
          
            <!-- This is the menu which appears on devices 768px wide or less -->
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" onClick="menu('0');">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $homeLink?>">
                <span class="fa fa-camera"></span> &nbsp;Picography
                </a>

			  </div>
              <div class="links">
              	 <a href="<?php echo $homeLink?>" style="color: #C33;"><button id="home"><span class="fa fa-home">&nbsp;</span>Home</button></a>
				<a href="<?php echo $regLink?>" style="color:#00CC66;"><button id="reg"><span class="fa fa-user-plus">&nbsp;</span>Sign Up</button></a>
				<a href="<?php echo $logLink?>" style="color: #0096FF"><button id="login"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Login</button></a>
				<a href="<?php echo $supportLink?>" style="color: #FFD700;"><button id="support"><span class='glyphicon glyphicon-info-sign'>&nbsp;</span>Support</button></a>
          
            </div>
            </div>
              </nav> <!-- End of Navigation -->
			  
			  <header id='display'>
        <div class="header-content">
            <div class="header-content-inner">
			<form  id='Form' method='POST' action='regproc.php'>
			
                <h1><span class="fa fa-user-plus"></span> &nbsp;Sign Up</h1>
				                <p>Create a new account, free forever.</p>
								
				<label for='name'>Name :&nbsp; <input id='name' name='name' type='text' placeholder="What's your name?" required/ title='Type your name here.'></label>
				<br /><br />
			
				 <label for='email'>Email :&nbsp; <input id='email' name='email' type='text' placeholder="Tell us your email ID." title='Enter your Email-ID.' required/></label><br /><br />
				
				<label for='password'>Password :&nbsp; <input type='password' name='password' id='password' placeholder='Enter a password.' title='Select a password of your choice.' required/></label><br /><br />
				<!-- <label for='dob'>Date of Birth : 
				<select name='year'>
				</select>
				</label><br /><br />-->
				<!-- Disabled for now <label for='cpassword'>
				Confirm Password :&nbsp; <input type='password' name='cpassword' id='cpassword' placeholder='Re-enter the password.' required/></label>
				<br /><br /> -->
				
				
				<!-- <label id='male' ><span class='fa fa-male'></span>&nbsp;Male  <input type='radio' value='male' name='gender' required/></label>
				&nbsp;&nbsp;
				<label id='female'><span class='fa fa-female'></span>&nbsp;Female <input type='radio' value='female' name='gender' required/></label>	<br /><br /> -->
					<button href="#" class="btn btn-primary btn-lg" name='btn-submit' type='submit' id='btn_submit'>Submit</button>
   				</form>
				
				<button type='button' onClick='loadDoc()'>Request Data</button>

<div id='loading' ><div class='fa-spin'>
<div class='load-bar'></div>
</div>
<h1 style='text-align: center; margin-top: 100px;'>Loading...</h1>
</div>

				
            </div>
        </div>
</header>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><span class='fa fa-camera'>&nbsp;</span> Picography</h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="<?php echo $logLink?>">Login</a>
					·
					<a href="<?php echo $regLink?>">Sign Up</a>
					·
					<a href="<?php echo $supportLink?>">Support</a>
					·
					<a href="#">About Us</a>
				</p>

				<p class="footer-company-name">Picography &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span></span>Mumbai, India</p>
				</div>

				<!--<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>-->

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">picography@gmail.com</a></p>
				</div>
				
				<div>
					<i class="fa fa-camera-retro"></i>
					<p>Dedicated to Photography</p>
				</div>
			</div>

			<div class="footer-right">

				
				<div class="footer-icons">

					<a href="#" id='facebook' title='Facebook'><i class="fa fa-facebook"></i></a>
					<a href="#" id='twitter' title='Twitter'><i class="fa fa-twitter"></i></a>
					<a href="#" id='instagram' title='Instagram'><i class="fa fa-instagram"></i></a>
					<a href="#" id='github' title='Github'><i class="fa fa-github"></i></a>
<p class="footer-company-about">
					<span>Made with <i class='fa fa-heart' style='color:#C33; padding-top: 20px;' ></i> in India</span>
				</p>
				</div>

			</div>

		</footer>
		<script async src="js/jquery-1.11.3.min"></script>
<script>
function loadDoc() 
{
	$.post("new1.php",
	{
		name : "Narendra Modi",
		city : "Mumbai"
}); 
	}
/*
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	if(this.readyState == 4 && this.status == 200) {
	document.getElementById('display').innerHTML = this.responseText;
		}
	};
	xhttp.open("GET","demo_get2.php?fname=Henry&lname=Ford", true);
	xhttp.send();*/
}
</script>

			 <script type='text/javascript'>
			 /*$("#btn_submit").click(function() {
				 
				 loadDoc();
			 }
				 );
			/*$(document).ready(function(){
				pwd = $("#password");
				cpwd = $("#cpassword");
				
			/*cpwd.on("keyup change", function(){
			if( pwd.val() == $(this).val() ) {
				$(this).css('background','linear-gradient(rgba(152,251,152,0.3),rgba(152,251,152,0.3))');
				}
				else {
					$(this).css('background','linear-gradient(rgba(255,50,50,0.3),rgba(255,50,50,0.3))')
				}
			});*/
			
			/*cpwd.on("keyup", function(){
				if( pwd.val() == $(this).val() ) {
				$(this).css('linear-gradient(rgba(152,251,152,0.3),rgba(152,251,152,0.))');
				pwd.css('linear-gradient(rgba(152,251,152,0.3),rgba(152,251,152,0.))');
				}
				else {
					$(this).css('background','linear-gradient(rgba(255,50,50,0.3),rgba(255,50,50,0.3))');
					pwd.css('linear-gradient(rgba(152,251,152,0.3),rgba(152,251,152,0.))');
				}
			});
			
			pwd.on("keyup", function(){
				if( cpwd.val() == $(this).val() ) {
				$(this).css('linear-gradient(rgba(152,251,152,0.3),rgba(152,251,152,0.))');
				cpwd.css('linear-gradient(rgba(152,251,152,0.3),rgba(152,251,152,0.))');
				}
				else {
					$(this).css('background','linear-gradient(rgba(255,50,50,0.3),rgba(255,50,50,0.3))');
					cpwd.css('linear-gradient(rgba(152,251,152,0.3),rgba(152,251,152,0.))');
				}
				});
			});
			 /*function slide() {
				 $(".slide").addClass("slideHide");
				 $(".slide").next(".hidden").removeClass('hidden');
			 }*/
			 /*$(document).ready.(function(){
			 var x_timer;
			 $('#email').keyup(function(e){
				 clearTimeout(x_timer);
				 var email = $(this).val();
				 x_timer = setTimeout(function(){
					 check_email_ajax(email);
				 },1000);
			 })
			 function check_email_ajax(username){ 
			 $('#user-result').html('Loading');
			 $.post('email-checker.php',{'username',:username},function(data){
				 $("#user-result").html(data);
			 });
			 } });
			 */
			 </script>
		  

</body>
</html>