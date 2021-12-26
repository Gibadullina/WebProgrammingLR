<html> <body>
<?php
include ("checkSession.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli("localhost", "root", "", "games");
 //$con=mysqli_connect("localhost","root","") or die ("Невозможно подключиться к серверу");
 //mysqli_select_db($con,"users") or die("Нет такой таблицы!");
  $zapros="UPDATE users SET username='".$_GET['name'].
	"', password='" .md5($_GET['password1'])."', type='".$_GET['type'].
	"' WHERE id_users='" .$_GET['id']."'";
	$users=$con->query("SELECT id_users, username, password, type FROM users");
	 $check = false;
	  while ($st = mysqli_fetch_array($users)) {
		 if ($st['username'] == $_GET['name']) {
		 	print "<p>Такой пользователь уже зарегистрирован.";
	 		print "<p><a href=\"index.php\"> Вернуться к списку пользователей </a>";
	 		$check = true;
		 }
	 }
	 if (!$check) {
		 if ($_GET['password1']=$_GET['password2']) {
	 $con->query($zapros);
	 if (mysqli_affected_rows($con)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
	пользователей </a>'; }
	 else { echo 'Ошибка сохранения. <a href="index.php">
	Вернуться к списку пользователей</a> '; }	 
	 }} else { echo 'Ошибка сохранения. Пароли не совпадают <a href="index.php">
	Вернуться к списку пользователей</a> '; } 
?>
</body> </html>