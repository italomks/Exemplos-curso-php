<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ambiente para estudo PHP</title>
</head>
<body>
	<?php
	if(isset($_POST["valor1"])){
		echo $_POST["valor1"];
	}
	?>
	<form method="POST">
		<input type="text" name="valor1">
		<input type="submit">
	</form>
</body>
</html>