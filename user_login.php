<?php
	require 'server/utilities.php';
	$currentEvent = getOption('event','currentEvent');
	/*if($currentEvent == 'none'){
		header('location: index.php');
	}*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/scripts_user_login.js"></script>
		<title> User Login </title>
	<head>

	<body>
		<h1> User Login </h1>
		<p> Enter login information below </p>
		<p> Team ID: <input id='teamID'></p>
		<p> Team Password: <input type = "password" id='teamPassword'></p>
		<button id="user_login"> User Login </button>
		<br> <?php print $currentEvent ?>
	</body>
</html>
