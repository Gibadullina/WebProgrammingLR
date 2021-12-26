<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Games - Гибадуллина</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
		<h2>Авторизация</h2>
		username: <input type="text" name="user"> <br>
		password: <input type="password" name="password"> <br>
		<input type="submit" name="come" value="Войти">  <br>
		<input type="submit" name="reset" value="Очистить">  <br>
	</form>
	<?php
	include ("connectBD.php"); 
	if (isset($_POST["come"])) {
		$user=$mysqli->query("SELECT id_user, username, password, type
		FROM users"); 
		// Ввод
		$username = $_POST["user"];
		$password = $_POST["password"];
		// Для индитификации входа
		$idCome = false;
		// Проверка вводимых данных
		while ($data = mysqli_fetch_array($user)) {
		$usernameBD = $data['username'];
		$passwordBD = $data['password'];
		$typeBD = $data['type'];
		$idUserBD = $data['id_user'];
		
			if ($username === $usernameBD and md5($password) === $passwordBD) {
				$idCome = true;
				session_start();
				$_SESSION['type'] = $typeBD;
				$_SESSION['id_user'] = $idUserBD;
				break;
			} else {
				$idCome = false;
			}
		}

		if ($idCome) {
			header("Refresh:0; url=index.php");
		} else { 
			echo "Логин или пароль введен не верно";
			
		}
	}
	 ?>
	 <br>
</body>
</html>