<!DOCTYPE html>
<html>
	<head>
	<title>BHDeveloper</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<!--<link rel="stylesheet" href="scrolling-nav.css">-->
	</head>
	
	<body>
	<?php
		if ($_POST["submit"]) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$message = $_POST['message'];
			$from = 'Contact Form';
			$to = 'admin@bhdeveloper.com';
			$subject = 'Message from Contact Demo ';
			
			$ipaddress = '';
			if ($_SERVER['HTTP_CLIENT_IP'])
				$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			else if($_SERVER['HTTP_X_FORWARDED_FOR'])
				$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
			else if($_SERVER['HTTP_X_FORWARDED'])
				$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
			else if($_SERVER['HTTP_FORWARDED_FOR'])
				$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
			else if($_SERVER['HTTP_FORWARDED'])
				$ipaddress = $_SERVER['HTTP_FORWARDED'];
			else if($_SERVER['REMOTE_ADDR'])
				$ipaddress = $_SERVER['REMOTE_ADDR'];
			else
				$ipaddress = 'UNKNOWN';
			//echo($ipaddress);
			//return $ipaddress;

			$message.= "\n\n$ipaddress\n\n";
			
			$body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
	 
			// Check if name has been entered
			if (!$_POST['name']) {
				$errName = 'Please enter your name';
			}
			
			// Check if email has been entered and is valid
			if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$errEmail = 'Please enter a valid email address';
			}
			
			//Check if message has been entered
			if (!$_POST['message']) {
				$errMessage = 'Please enter your message';
			}
	 
	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
	}
		}
	?>
		<div class = "navbar-wrapper">
			<div class = "container">
				<nav class = "navbar navbar-inverse navbar-static-top" role = "navigation">
					<div class = "container">
						<div class = "navbar-header">
							<button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar" aria-expanded = "false" aria-controls = "navbar">
								<span class = "sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class = "navbar-brand" href = "http://bhdeveloper.com">BHDeveloper</a>
						</div>
						<div id = "navbar" class = "navbar-collapse collapse">
							<ul class = "nav navbar-nav">
								<li class = "active"><a href = "#">Home</a></li>
								<li><a class="page-scroll" href="#about">About</a></li>
								<li><a class="page-scroll" href="#contact">Contact</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Development<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a class="page-scroll" href="#webdev">Web</a></li>
										<li><a class="page-scroll" href="#musicaldev">Musical</a></li>
										<!--<li><a class="page-scroll" href="#personaldev">Personal</a></li>-->
										<!--<li class="divider"></li>-->
										<!--<li class="dropdown-header">Projects</li>-->
										<!--<li><a href="projects.html">Projects</a></li>-->
									</ul>
								<li><a class="page-scroll" href="projects.html">Projects</a></li>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/keyboard.jpg" alt="Web Development">
					<div class="container">
						<div class="carousel-caption">
							<h1>Web Development</h1>
							<p><!--Release your inner creativity. -->Whatever you want. Whatever you need.<br>Whatever it takes.</p>
							<p><a class="btn btn-lg btn-default page-scroll" href="#webdev" role="button">Learn More<!--Current Projects--></a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="img/guitars.jpg" alt="Musical Development">
					<div class="container">
						<div class="carousel-caption">
							<h1>Musical Development</h1>
							<p>Let those creative juices flow.<br></p>
							<p><a class="btn btn-lg btn-default page-scroll" href="#musicaldev" role="button">Learn More</a></p>
						</div>
					</div>
				</div>
				<!--<div class="item">
					<img src="img/personaldev.jpg" alt="Personal Development">
					<div class="container">
						<div class="carousel-caption">
							<h1>Personal Development<br></h1>
							<p>Emotional. Spiritual. Physical.</p>
							<p><a class="btn btn-lg btn-default page-scroll" href="#personaldev" role="button">Learn More</a></p>
						</div>
					</div>
				</div>-->
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
		<section id="webdev">
			<hr class="featurette-divider">
			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">Web Development. <span class="text-muted">Whatever you want. Whatever you need. Whatever it takes.</span></h2>
					<p class="lead">You have ideas. We have ways to make it come to life. We hold every project to high standards, and we'll do whatever it takes to keep raising the bar.</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive" src="img/keyboardsection.jpg" alt="Web Dev">
				</div>
			</div>
		</section>
		
		<section id="musicaldev">
			<hr class="featurette-divider">
			<div class="row featurette">
				<div class="col-md-5">
					<img class="featurette-image img-responsive" src="img/guitarssection.jpg" alt="Music Dev">
				</div>
				<div class="col-md-7">
					<h2 class="featurette-heading">Musical Development. <span class="text-muted">Let those creative juices fly.</span></h2>
					<p class="lead">Our musical development team has been playing and writing music since they were kids. We have all the tools to capture your inner creativity.</p>
					<p>(Not feeling creative? Let us help. Our team is always coming up with new musical creations.)</p>
				</div>
			</div>
			<hr class="featurette-divider">
		</section>
		
	<!--	<section id="personaldev">
			<hr class="featurette-divider">
			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">Personal Development. <span class="text-muted">Emotional. Spiritual. Physical.</span></h2>
					<p class="lead">Keep fighting for what you believe. Never give up your dreams. If anything gets you down, we'll be here to help you back up.</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive" src="img/personaldevsection.jpg" alt="Personal Dev">
				</div>
			</div>
			<hr class="featurette-divider">
		</section>-->
		
		<section id="about">	
			<div class="block">
				<div class="block-content">
					<div class="entry-content">
						<h2 class="featurette-heading">About</h2>
						<p class="lead">BHDeveloper was created to help fulfil dreams and ambitions. We have an experienced musical staff, and our web development team loves getting creative.
					</div>
				</div>
			</div>
			<hr class="featurette-divider">
		</section>
		
		<section id="contact">	
			<div class="block">
				<div class="block-content">
					<div class="entry-content">
						<h2 class="featurette-heading">Contact</h2>
						<p class="lead">Contact us for any needs you may have. If you have any questions, don't hesitate to ask, we are more than happy to answer.
						<form class="form-horizontal" role="form" method="post" action="index.php#contact">
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
									<?php echo "<p class='text-danger'>$errName</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-4">
									<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
									<?php echo "<p class='text-danger'>$errEmail</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="phone" class="col-sm-2 control-label">Phone</label>
								<div class="col-sm-4">
									<input type="tel" class="form-control" id="phone" name="phone" data-format="(ddd)ddd-dddd" placeholder="615-295-5463" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
									
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-4">
									<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
									<?php echo "<p class='text-danger'>$errMessage</p>";?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<?php echo $result; ?>    
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-2">
									<p>Alternatively, you may email us at <a href="mailto:admin@bhdeveloper.com?Subject=Hello" target="_top">admin@bhdeveloper.com</a></p>   
								</div>
							</div>
							
						</form> 
						
					</div>
				</div>
			</div>
			<hr class="featurette-divider">
		</section>
		
		<footer>
			<p class="pull-right"><a class="page-scroll" href="#">Back to top</a></p>
			<p>&copy; 2015 BHDeveloper, Inc. <!--&middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>-->
		</footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="jquery.easing.min.js"></script>
		<script src="scrolling-nav.js"></script>
	</body>
</html>
