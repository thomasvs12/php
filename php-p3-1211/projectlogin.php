<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<h1>Login voor Leerlingen</h1>
	<div class="loginBox">
		<h3>Login Form</h3>
		<br>
		<?php
		if (isset($_GET["error"])) {
			echo "LeerlingID en of Wachtwoord is fout" ;
		}
		?>
		<br> 
		<form method="post" action="check.php">
			<label>LeerlingID:</label><br> <input type="text" name="username"
				placeholder="username" /><br>
			<br> <label>Wachtwoord:</label><br> <input type="password"
				name="password" placeholder="password" /> <br>
			<br> <input type="submit" value="Login" />
		</form>
		<div class="error"><?php echo $error;?></div>
	</div>
</body>
</html>

