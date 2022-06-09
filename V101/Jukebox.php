<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My SQL Database Server Information</title>
<meta http-equiv="content-type"
	content="text/html; charset=iso-8859-1" />
	<h1>My SQL Database Server Information</h1>
</head>
<body>
<?php
$DBName = "jukebox";

$DBConnect = mysql_connect("localhost", "root", "");

if ($DBConnect === FALSE)
	echo "<p>Connection error: "
	. mysql_error() . "</p>\n";
else {
	if (mysql_query("CREATE DATABASE $DBName", $DBConnect) === FALSE)
		echo "<p>Could not create the \"$DBName\" " .
		"database: " . mysql_error($DBConnect) .
		"</p>\n";
	else
		echo "<p>Successfully created the " .
		"\"$DBName\" database. </p>\n";
	
		mysql_close($DBConnect);
		}
	?>





</body>
</html>