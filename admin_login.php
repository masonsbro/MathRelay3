<!doctype HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/scripts_admin_login.js"></script>
		<link rel="stylesheet" type="text/css" href="../MathRelay3/styles/admin_login.css"/>
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
		<title> Admin </title>
	</head>

	<body style="text-align:center">
	<section>
		<h1>Admin Login</h1>
		<p> Password: <input type = "password" name= "password" placeholder="Enter Password" id='adminPassword'>
		<button id="admin_login"> LOGIN </button> <br>
		<br>
		<p style="color: red" id="passErr"></p>
		<p>If you are not an administrator, please click the back button below. Thank you.</p>
		<button id="back_button">BACK</button>
		<div id="adminverify"><div>
	</section>
	</body>
</html>
