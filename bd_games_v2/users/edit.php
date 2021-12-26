<html>
<head
<title> Редактирование данных пользователя</title>
</head>
<body>
<?php
include ("../checkSession.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 //$connect_error = 'Нет такой таблицы';
 $con = new mysqli("localhost", "root", "", "games");
//$con = mysqli_connect('localhost', 'root');
 //mysqli_select_db($con,'games') or die($connect_error);
 $zapr="SELECT username, password, type FROM users WHERE id_users='".$_SESSION['id_user']."'";
 $rows=mysqli_query($con,$zapr);
 while ($st = mysqli_fetch_array($rows,MYSQLI_BOTH)) {
  $id=$_SESSION['id_user'];
 $name = $st['username'];
 $password = $st[' password'];
 $type = $st['type'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Логин: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Пароль: <input name='password1' size='40' type='text'
value='".$password."'>";
print "<br>Проверка Пароля: <input name='password2' size='40' type='text'
value='".$password."'>";
	if ($_SESSION['type'] == 2) {
		print "<br>Тип пользователя: <select name='type'>
		<option value='1'>Оператор</option>
		<option value='2'>Администратор</option>
		</select>";
	} else {
		print "<input type='hidden' name='type' value='".$type."'> <br>";
	}
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"..\index.php\"> Вернуться к спискам </a>";
?>
</body>
</html>