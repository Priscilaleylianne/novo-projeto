<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<P>
				<label>USERNAME: </label>
				<input type="text" id="user" name="user"   />
			</P>
			
			<P>
				<label>PASSWORD: </label>
				<input type="password" id="pass" name="pass"   />
			</P>

			<P>
				<input type="submit" id="btn" value="Login"   />
			</P>
		</form>
	</div>
</body>
</html>