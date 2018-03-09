<?php
//@ob_start();
//session_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
//$result2=mysql_query("SELECT * FROM `exp1` ORDER BY `id` INSC",$link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable safety gadget to keep you safe">
	<meta name="author" content="IOT Squad">
	<title>IOT SQUAD|Welcome</title>
	<link rel="stylesheet" href="index_stylescript.css" type="text/css"/>
</head>
<body>
	<header>
		<div class="container">
			<div id="Branding">
				<h1>IOT Squad</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="data.php" target="_blank">Data</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section id="showcase">
		<div class="container">
		<h1>Affordable safety gadget to protect you</h1>
		<p>Your safety our priority</p>
		</div>
	</section>
	<section id="register">
		<div class="container">
			<h1>Welcome</h1>
		</div>
	</section>
	<section id="images">
		<div class="container">
			<div class="img">
				<img src="cisco.jpg" alt="cisco logo">
				<h1>Cisco IOT Hackathon</h1>
				<p>Organised by Cisco</p>
			</div>
			<div class="img">
				<img src="logo.png" alt="Our logo">
				<h1>IOT Squad</h1>
				<p>Group of innovators</p>
			</div>
			<div class="img">
				<img src="trident.png" alt="trident logo">
				<h1>Trident  Academy of Technology</h1>
				<p>Organised by Trident</p>
			</div>
		</div>
	</section>
	
	<footer>IOT Squad,Copyright&copy;2017</footer>
</body>
</html>