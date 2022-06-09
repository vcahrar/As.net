<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Contact Abraham Strauss</title>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" 
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href = "http://shavuoscards.com/Bootstrap/css/default.css" rel = "stylesheet">
		<link href = "http://shavuoscards.com/Bootstrap/css/styles.css" rel = "stylesheet">
		
	</head>
	<body background-image: url('img/livepreviewbook.jpg');>

	
<div class = "container" >
	<div class = "navbar navbar-inner nav-collapse">
			<a href="index.html" class="navbar-brand">Home</a>
			<a href="inc_about.html.html" class="navbar-brand">About Me</a>
			<a href = "inc_port.html" class="navbar-brand">Portfolio</a> 
			<a href = "inc_gif.html" class="navbar-brand">gif</a> 
			<a href = "info_form.php" class="navbar-brand">Contact Abraham Strauss</a>
	</div>

</div>		
<?php
function displayRequired($fieldName)
{
	?>
	<div class= "container">
		<div class="row" > 
		
			
			<div class="col-md-12" align="center">
				<div class="jumbotron"><p align="center"><?php
		
					echo "The field \"$fieldName\" is required.<br />\n";
	
					?></p>
				</div>
			</div>
		</div>
	</div>
					
					<?php
}
function validateInput($data, $fieldName)
{
	global $errorCount;
	if (empty($data)){
		displayRequired($fieldName);
		++$errorCount;
		$retval = "";
	}
	else {
	$retval = trim($data);
	$retval = stripslashes($retval);
	}
	return($retval);
}
function redisplayForm($firstName, $lastName)
{
	?>
	<!-- Form redisplayed -->
	
	<div class= "container">
		<div class="row" > 
		
			
			<div class="col-md-12" align="center">
				<div class="jumbotron">
					<form name="info" action="info_shavuoscards.php" method="post">
						
						<p>First Name: *<br /><input type="text" name="fName"
						value="<?php echo $firstName; ?>" size="28" /></p>
						<p>Last Name: <br /><input type="text" name="lName"
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
	<?php
	
}
	
	
$errorCount = 0;

$firstName = validateInput(stripslashes ($_POST['fName']), "First name");
$email = validateInput(stripslashes ($_POST['email']), "Email");
$msg = validateInput(stripslashes ($_POST['msg']), "Comments");
if ($errorCount>0)
{
	?>
	<div class= "container">
		<div class="row" > 
		
			
			<div class="col-md-12" align="center">
				<div class="jumbotron"><p align="center"><?php
					echo "Please re-enter the information below.<br />\n";
					redisplayForm($firstName, $lastName);
					?></p>
				
				</div>
		    </div>
		</div>
	</div>

	<?php
				
					
}

else
	{
		$To = "abraham@shavuoscards.abrahamstrauss.net";
		$Subject = "Cheshvan In mail";
		$Message =  $firstName. " " . $lastName . "\n" . $email .
		"\n" . $msg;
		$result = mail($To, $Subject, $Message);
		?>
		<div style="align:center">
		<?php
		if ($result)
			$resultMsg =
			"your message was successfully sent." . 
			"<br />" . "Thank you for keeping us informed.";
		else
			$resultMsg = "There was a problem sending your message.";
		?>
		</div>
		<?php
	}

	if (!empty($firstName))
		?>
		<div class= "container">
			<div class="row" > 
		
			
				<div class="col-md-12" align="center">
					<div class="jumbotron"><h3 align="center"><?php echo
						$firstName . " " . $lastName . ", "
						. $resultMsg  ; ?></h3> 
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