<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Сайт "Игры"</title>
</head>
<body><style  type="text/css">
   h1 { 
    font-size: 120%; 
   } </style>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
		<h2>Авторизация</h2>
		 <h1>Логин: <input type="text" name="user"> <br><br>
		Пароль: <input type="password" name="password"> <br></h1>
		<input type="submit" name="come" value="Войти">  <br>
		<input type="submit" name="reset" value="Очистить">  <br>
	</form>
	<?php
	//connect db
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 /*$connect_error = 'Нет такой БД';
 $con = mysqli_connect('localhost', 'root');
 mysqli_select_db($con,'games') or die($connect_error);*/
 $mysqli = mysqli_connect('localhost', 'root', '', 'games') or die ("Невозможно
	подключиться к серверу");
	if (isset($_POST["come"])) {
		$user=$mysqli->query("SELECT id_users, username, password, type
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
		$idUserBD = $data['id_users'];
		echo md5($password);
			if ($username === $usernameBD and md5($password) === $passwordBD) {
				$idCome = true;
				session_start();
				$_SESSION['type'] = $typeBD;
				$_SESSION['id_users'] = $idUserBD;
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