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
print "<br>Игра: <input name='developer' size='50' type='text'
value='".$developer."'>";
print "<br>Издатель: <input name='publisher' size='50' type='text'
value='".$publisher."'>";
print "<br>Стоимость: <input name='cost' size='11' type='number'
value='".$cost."'>";
print "<br>Цифровой ключ: <input name='dkey' size='20' type='text'
value='".$dkey."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"..\index.php\"> Вернуться к списку
игр </a>";
?>
</body>
</html>
<P> Игра: <?php echo '<SELECT NAME="game" SIZE="1">';
  for ($n=0;$n<$i;$n++){
  echo '<OPTION VALUE="'.$idg[$n].'" SELECTED>'. $game[$n]; }
 echo '</SELECT>';
 ?>
 <P> Магазин: <?php echo '<SELECT NAME="store" SIZE="1">';
   for ($n=0;$n<$k;$n++){
  echo '<OPTION VALUE="'.$ids[$n].'" SELECTED>'. $store[$n]; }
  echo '</SELECT>';
 ?>