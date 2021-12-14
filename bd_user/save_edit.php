<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli("localhost", "root", "", "users");
 //$con=mysqli_connect("localhost","root","") or die ("Невозможно подключиться к серверу");
 //mysqli_select_db($con,"users") or die("Нет такой таблицы!");
 $g1=$_GET['name'];
 $g2=$_GET['login'];
 $g3=$_GET['password'];
 $g4=$_GET['e_mail'];
 $g5=$_GET['info'];
  $zapros="UPDATE user SET user_name='".$g1.
"', user_login='".$g2."', user_password='"
.$g3."', user_e_mail='".$g4.
"', user_info='".$g5."' WHERE id_user='".$_GET['id']."'";
 mysqli_query($con,$zapros);
 printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($con));
 if (mysqli_affected_rows($con)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body> </html>