<?php
 // Подключение к базе данных:
$connect_error = 'Нет такой таблицы';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'games') or die($connect_error);
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO game SET game_name='" . $_GET['name']
."', game_genre='".$_GET['genre']."', game_developer='"
.$_GET['developer']."', game_publisher='".$_GET['publisher'].
"', game_sale='".$_GET['sale']. "'";
 mysqli_query($con, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($con)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы внесли информацию об игре.";
 print "<p><a href=\"..\index.php\"> Вернуться к списку
игр </a>"; }
 else { print "Ошибка сохранения. <a href=\"..\index.php\">
Вернуться к списку игр </a>"; }
?>

	<?php
	 // Подключение к базе данных:
	include ("../checkSession.php");
	$mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO users SET username='".$_GET['name'].
	"', password='" .md5($_GET['password1'])."', type='".$_GET['type']. "'";

	 $users=$mysqli->query("SELECT id_users, username, password, type FROM users");
	 $check = false;
	  while ($st = mysqli_fetch_array($users)) {
		 if ($st['username'] == $_GET['name']) {
		 	print "<p>Такой пользователь уже зарегестрирован.";
	 		print "<p><a href=\"index.php\"> Вернуться к списку пользователей </a>";
	 		$check = true;
		 }
	 }
	 if (!$check) {
	 	$mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку
	пользователей </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\">
	Вернуться к списку пользователей </a>"; }	 
	}	 
	?>
</body>
</html>
