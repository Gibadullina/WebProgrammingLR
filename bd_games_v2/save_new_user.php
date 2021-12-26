<?php
	 // Подключение к базе данных:
	include ("checkSession.php");
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = new mysqli("localhost", "root", "", "games");
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO users SET username='".$_GET['name'].
	"', password='" .md5($_GET['password1'])."', type='".$_GET['type']. "'";

	 $users=$con->query("SELECT id_users, username, password, type FROM users");
	 $check = false;
	  while ($st = mysqli_fetch_array($users)) {
		 if ($st['username'] == $_GET['name']) {
		 	print "<p>Такой пользователь уже зарегестрирован.";
	 		print "<p><a href=\"index.php\"> Вернуться к списку пользователей </a>";
	 		$check = true;
		 }
	 }
	 if (!$check) {
		 if ($_GET['password1']===$_GET['password2']) {
	 	$con->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($con)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку
	пользователей </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\">
	Вернуться к списку пользователей </a>"; }	 
	} else { echo 'Ошибка сохранения. Пароли не совпадают <a href="index.php">
	 Вернуться к списку пользователей</a> '; }}
	?>
