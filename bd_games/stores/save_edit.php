<html> <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli("localhost", "root", "", "games");
 //$con=mysqli_connect("localhost","root","") or die ("Невозможно подключиться к серверу");
 //mysqli_select_db($con,"users") or die("Нет такой таблицы!");
 $g1=$_GET['name'];
 $g2=$_GET['url'];
  $zapros="UPDATE store SET store_name='".$g1.
"', store_url='".$g2."' WHERE id_store='".$_GET['id']."'";
 mysqli_query($con,$zapros);
 //printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($con));
 if (mysqli_affected_rows($con)>0) {
 echo 'Все сохранено. <a href="../index.php"> Вернуться к спискам</a>'; }
 else { echo 'Ошибка сохранения. <a href="../index.php">
Вернуться к спискам</a> '; }
?>
</body> </html>