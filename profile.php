<!-- Picography is a copyrighted website owned solely by Mr.Amey Bhavsar ( iamamey24@gmail.com ). -->
<!-- This is the homepage of the website. -->
<!-- Acknowledgements :
Font Awesome;Bootstrap;Quackit.com;  -->
<?php 
session_start();
$homeLink = 'index.php';
$regLink = 'register.php';
$logLink = 'login.php';
$supportLink = 'support.php';
$proimage = 'img/profile-def.png';
$user = $_SESSION['user'];
?>

<?php

if(isset($_POST['upld'])) {
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	echo $imageFileType;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$proimage = $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
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
<script src="js/jquery-1.11.3.min.js"></script>
<script async src="js/main.js"></script>

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

<style>
html {
	background: none;
	
}
body {
	background: none;	background:linear-gradient(rgba(20,20,20,.25),rgba(20,20,20,.25)),url('img/specs.jpg');
	background-position: center;
	background-attachment: fixed;
	background-size: cover; 
}
header {
	background: none;
}
.profile-holder {
	background: transparent;
	background: url('<?php echo $proimage ; ?>'), linear-gradient( rgba(255,255,255,0.85),rgba(255,255,255,0.85), rgba(255,255,255,1));
	background-position: center;
	background-size:cover;
	width: 300px;
	height: 300px;
	border-radius: 50%;
	margin: 0 auto;
	border: none;
	cursor: url('cursor.gif'), url('cursor.ani'), auto;
}
@media (max-width: 768px) {
	.profile-holder {
		width: 200px;
		height: 200px;
	}
	.btn-lg {
		margin: 0 auto;
	}
}
@media (max-width: 480px) {
	.profile-holder {
		width: 175px;
		height: 175px;
	}
	form#proForm label{
		float: left;
	line-height: normal;
	margin: 0 auto;
	margin-bottom: 12px;
	font-size: 80%;
	display: block;
	}
	.btn-lg,
.btn-group-lg > .btn {
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 8px;
	padding-right: 8px;
}
}

}
.btn-lg,
.btn-group-lg > .btn {
	line-height: 4.33333;
	vertical-align: middle;
}
form#proForm label {
	border: 1px solid transparent; color: #FFF;
	transition: border 0.2s ease-in-out;
	font-weight: 100;
	position: relative;
	display: inline-block;
	line-height: normal;
	cursor: pointer;
}
form#proForm label:hover {
	border: 1px solid #FFF;
}
.navbar {
	border: none;
}
.links, .navbar-toggle {

}
</style>
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="siteNav">
    <div class="menubar">
<ul>
<li><a href="<?php echo $homeLink ?>" style="color: #C33;"><button id="home"><span class="fa fa-home">&nbsp;</span>Home</button></a></li>
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
                <span class="fa fa-camera"></span> &nbsp;Picography
                </a>
				
			  </div>
              
              	 
				 <div class='links'>
				 <a><button style='font-family: "Montserrat";
	font-weight: 400;
	font-size: 1.5em; letter-spacing: 1px;
	color: #010101;'><?php echo $_SESSION['user']['name'];?></button></a>
            </div>
            </div>
              </nav> <!-- End of Navigation -->
			  
			  
			  
			  
			  
			  <header>
			   <div class="header-content">
            <div class="header-content-inner">
			
			<h1 style='color: #ZZZ;text-shadow: 0px 2px 1px #333;font-family:"Montserrat";'>Select your Avatar.</h1>
			
			<div class='profile-holder'>
			</div>
			
			<br />
			<form id='proForm' method='POST' enctype='multipart/form-data' action='<?php $_SERVER['PHP_SELF'] ?>'>
			<!--<label class="btn btn-primary btn-lg" for='pro-c' style=
			'background: linear-gradient(rgba(200,20,60,0.8),rgba(220,20,60,1));'
			>
			<span class='fa fa-heart'></span> Choose from our collection.
			<input href="#" style='display: none;' id='pro-c' type='button' />
			</label>-->
			&nbsp;&nbsp;&nbsp;
			<label style='cursor: pointer;
			background: linear-gradient(rgba(30,144,255,1),rgba(30,75,235,0.8));' for='fileToUpload' class='btn btn-primary btn-lg'>
			<span class='fa fa-mobile' style='font-size: 22px; position: relative;'></span> 
			Upload from your device.
			<input style='display:none;' type='file' name='fileToUpload' id='fileToUpload'  value='Hello' />
			</label>
			<input type='hidden' value='1' name='upld' /> 
			<br />
			
			<br />
			<label class="btn btn-primary btn-lg" for='pro_skip'
			style='background: linear-gradient(rgba(255,215,0,1),rgba(218,165,32,0.8));
			'>
			<span class='fa fa-angle-double-right'></span> Skip
			<input style='display: none;' type='reset' id='pro_skip' name='propic-submit' value='0'/>
			</label>
			&nbsp;&nbsp;&nbsp;
			<label class="btn btn-primary btn-lg" for='pro_submit'
			style='background: linear-gradient(rgba(50,205,50,0.8),rgba(34,139,34,1)); '
			>
			Next <span class='fa fa-angle-right' ></span>
			<input style='display: none;' type='submit' id='pro_submit' name='propic-submit' value='1'/>
			</label>
			</br />
			</form>
						</div>
        </div>
</header>




			  <footer class="footer-distributed">

			<div class="footer-left">

				<h3><span class='fa fa-camera'>&nbsp;</span> Picography</h3>

				<p class="footer-links">
					<a href="<?php echo $homeLink ?>">Home</a>
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
					<span>Made with <i class='fa fa-heart' style='' ></i> in India</span>
				</p>
				</div>

			</div>

		</footer>
</body>
</html>