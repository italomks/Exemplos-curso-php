<!DOCTYPE html>
<html>
<head>
	<title>login e senha</title>
</head>
	<body>

		<?php

		$login = "italo";
		$senha = "123";

		if (isset($_POST['login'])) {
			// echo $_POST['login'] . "<br>";
			// echo $_POST['senha'];

			if ($_POST["login"] == $login and $_POST["senha"] == $senha) {
				echo "login efetuado com sucesso";
			}else{
				echo "login ou senha invalido";
			}
		}
		?>
		<form method="POST">
			<input type="text" name="login">
			<input type="password" name="senha">
			<input type="submit">
		</form>
	</body>
</html>