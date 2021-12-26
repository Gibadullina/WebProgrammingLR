<html> <body>
<?php
include ("checkSession.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli("localhost", "root", "", "games");
 //$con=mysqli_connect("localhost","root","") or die ("Невозможно подключиться к серверу");
 //mysqli_select_db($con,"users") or die("Нет такой таблицы!");
 
 $g5=$_GET['sale'];
  $zapros="UPDATE d_key SET purchase_date='".$_GET['purchase'].
"', expiration_date='".$_GET['expiration']."', game='"
.$_GET['game']."', store='".$_GET['store'].
"', key_cost='".$_GET['cost']."', digital_key='".$_GET['dkey']."' WHERE id_digital_key='".$_GET['id']."'";
 mysqli_query($con,$zapros);
 //printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($con));
 if (mysqli_affected_rows($con)>0) {
 echo 'Все сохранено. <a href="../index.php"> Вернуться к списку
игр </a>'; }
 else { echo 'Ошибка сохранения. <a href="../index.php">
Вернуться к списку игр</a> '; }
?>
</body> </html>