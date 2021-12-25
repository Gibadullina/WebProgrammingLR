<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli("localhost", "root", "", "games");
 //$con=mysqli_connect("localhost","root","") or die ("Невозможно подключиться к серверу");
 //mysqli_select_db($con,"users") or die("Нет такой таблицы!");
 
 $g5=$_GET['sale'];
  $zapros="UPDATE game SET game_name='".$g1.
"', game_genre='".$g2."', game_developer='"
.$g3."', game_publisher='".$g4.
"', game_sale='".$g5."' WHERE id_game='".$_GET['id']."'";
 mysqli_query($con,$zapros);
 //printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($con));
 if (mysqli_affected_rows($con)>0) {
 echo 'Все сохранено. <a href="../index.php"> Вернуться к списку
игр </a>'; }
 else { echo 'Ошибка сохранения. <a href="../index.php">
Вернуться к списку игр</a> '; }
?>
</body> </html>