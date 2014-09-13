<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact - Twenty by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="contact loading">
	
		<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="index.html"> <span>SOMETHING</span></a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.html">Welcome</a></li>
						
					</ul>
				</nav>
			</header>
		
		<!-- Main -->
			<article id="main">
			<header class="special container">
			<span class="icon fa-envelope"></span>
<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$to = 'francogauchat@yahoo.com';
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

   if($_POST['submit']){
	
	if(mail($to, $name, $email, $body)){
		
		echo '<h2>Tu mensaje ha sido enviado!</h2>
				<p>Nos contactaremos con vos.</p> 
				<a href="index.html">Volver</a>';

	}else {
		echo '<h2>Tu mensage no ha sido enviado!</h2>
					<a href="contact.html">try again</a>';
		}
   }
?>

				
					
				</header>
					</article>
				
		<!-- Footer -->
			<footer id="footer">
			
				<ul class="icons">
					<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					<!-- <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
					<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>-->
				</ul>
				
				<span class="copyright">&copy; SOMETHING 2014. </span>
			
			</footer>

	</body>
</html>