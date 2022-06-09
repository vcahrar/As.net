
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Contact Abraham Strauss</title>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" 
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href = "<!--http://abrahamstrauss.net/-->Bootstrap/css/default.css" rel = "stylesheet">
		<link href = "<!--http://abrahamstrauss.net/-->Bootstrap/css/styles.css" rel = "stylesheet">
		
	</head>
	<body>

	
<div class = "container" >
	<div class = "navbar navbar-inner nav-collapse">
			<a href="index.html" class="navbar-brand">Home</a>
			<a href="inc_about.html.html" class="navbar-brand">About Me</a>
			<a href = "inc_port.html" class="navbar-brand">Portfolio</a> 
			<a href = "inc_gif.html" class="navbar-brand">gif</a> 
			<a href = "info_form.php" class="navbar-brand">Contact Us</a>	
		
	</div>

</div>	
<!-- Abraham Strauss
# July 7, 2010-->


<div class= "container">
	<div class="row" > 
		
			
			<div class="col-md-12" align="center">
				<div class="jumbotron">
					<form name="info" action="info_shavuoscards.php" method="post">
						
						<p>First Name: *<br /><input type="text" name="fName"
						value="<?php echo $firstName; ?>" size="28" /></p>
						<p>Last Name:<br /><input type="text" name="lName"
						value="<?php echo $lastName; ?>" size="28" /></p>
						<p>Email: *<br /><input type="text" name="email"
						value="<?php echo $email; ?>" size="28" /></p>
						<p>Comments: *<br />
						<textarea rows="6" cols="30"  name="msg"
						value="<?php echo $msg; ?>"></textarea>
						</p>
							<p>
							
						<input type="reset" value="Clear Form" />&nbsp;
						&nbsp;&nbsp;
						<input type="submit" name="Submit" value="Send Form" /> 
						</p>
					</form>
				</div>
			</div>
		
	</div>
 </div>
 
<!-- Make nav lower-->		
<div class="container">
		<div style="height:100px"></div>
	</div>
<div class="container">
	<div class = "navbar navbar-default nav-collapse">
		<div class="col-sm-11">
			
			<p style="color:#6666cc">Site built by Abraham Strauss <br />
			using Bootstrap v3.2 
			responsive design by Twitter 
			
		</div>
		
		
		<!-- Twitter Logo -->
		
		
		<div class="col-sm-1">
		
		
		
			<img style="-webkit-user-select: none;color:#0084b4;align:right"
		src="https://abs.twimg.com/favicons/favicon.ico" />
		
		</div>
</p>
		
			
		</div>
</div>	 
	
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src = "Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>