<!-- Picography is a copyrighted brand owned solely by Mr.Amey Bhavsar ( iamamey24@gmail.com ). -->
<!-- This is the homepage of the website. -->
<!-- Acknowledgements :
Font Awesome;Bootstrap;Quackit.com;  -->
<?php 
session_start();
$regLink = 'register.php';
$logLink = 'login.php';
$supportLink = 'support.php';
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
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="siteNav">
    <div class="menubar">
<ul>
<li><a href="#" style="color: #C33;"><button id="home"><span class="fa fa-home">&nbsp;</span>Home</button></a></li>
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
                <a class="navbar-brand" href="#">
                <span class="fa fa-camera"></span>Picography
                </a>

			  </div>
              <div class="links">
              	 <a href="#" style="color: #C33;"><button id="home"><span class="fa fa-home">&nbsp;</span>Home</button></a>
				<a href="<?php echo $regLink?>" style="color:#00CC66;"><button id="reg"><span class="fa fa-user-plus">&nbsp;</span>Sign Up</button></a>
				<a href="<?php echo $logLink?>" style="color: #0096FF"><button id="login"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Login</button></a>
				<a href="<?php echo $supportLink?>" style="color: #FFD700;"><button id="support"><span class='glyphicon glyphicon-info-sign'>&nbsp;</span>Support</button></a>
          
            </div>
            </div>
              </nav> <!-- End of Navigation -->
    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1><span class="fa fa-camera"></span> &nbsp;Picography</h1>
                <p>A brand new stage for beginner and expert photographers.</p>
                <a href="#" class="btn btn-primary btn-lg">Engage Now</a>
            </div>
        </div>
</header>

<div class="intro">

<i class="fa fa-camera tooltip">
<p class="small">
Click
</p>
</i>

<i class="fa fa-photo tooltip">
<p class="small">
Post
</p>
</i>


<i class="fa fa-share-alt tooltip">
<p class="small">
Share
</p>
</i>
</div>

<div class="paras">
<section id='para1'>
<h2>All the world's a stage,</h2>
</section>
<section id='para2'>
<h2>and all men and women,</h2>
</section>
<section id='para3'>
<h2>are merely its players;</h2>
</section>
<section id='para4'>
<h2>It's your time to perform.</h2>

<a href='login.php'><span>Login <i class='glyphicon glyphicon-log-in'></i></span></a>
<a href='register.php'><span>Sign Up Now <i class='fa fa-user-plus'></i></span></a>

</section>
</div>
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


<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/main.js"></script>
</script>
</body>
</html>