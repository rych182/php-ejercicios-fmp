<?php
	session_start();
	if (!$_SESSION['entro']) {
		header("location: https://www.google.com.mx/");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hola mundo</h1>
</body>
</html>