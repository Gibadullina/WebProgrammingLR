<html>
<head
<title> Редактирование данных о ключах </title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 //$connect_error = 'Нет такой таблицы';
 $con = new mysqli("localhost", "root", "", "games");
//$con = mysqli_connect('localhost', 'root');
 //mysqli_select_db($con,'games') or die($connect_error);
 $zapr="SELECT purchase_date, expiration_date, game, store, key_cost,digital_key FROM digital_key WHERE id_digital_key='".$_GET['id']."'";
 $rows=mysqli_query($con,$zapr);
 while ($st = mysqli_fetch_array($rows,MYSQLI_BOTH)) {
  $id=$_GET['id'];
  $purchase=$st['purchase_date'];
  $expiration=$st['expiration_date'];
  $game=$st['game'];
  $store=$st['store'];
  $cost=$st['key_cost'];
  $dkey=$st['digital_key'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Дата приобретения: <input name='purchase' size='50' type='date'
value='".$purchase."'>";
print "<br>Дата окончания: <input name='genre' size='50' type='date'
value='".$genre."'>";
print "<br>Разработчик: <input name='developer' size='50' type='text'
value='".$developer."'>";
print "<br>Издатель: <input name='publisher' size='50' type='text'
value='".$publisher."'>";
print "<br>Стоимость (млн): <input name='sale' size='11' type='number'
value='".$sale."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"..\index.php\"> Вернуться к списку
игр </a>";
?>
</body>
</html>