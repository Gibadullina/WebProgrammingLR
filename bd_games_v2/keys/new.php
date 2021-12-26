<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 //$connect_error = 'Нет такой таблицы';
 $con = new mysqli("localhost", "root", "", "games");
//$con = mysqli_connect('localhost', 'root');
 //mysqli_select_db($con,'games') or die($connect_error);
 $zapr="SELECT  id_game, game_name FROM game";
 $rows=mysqli_query($con,$zapr);
 $i=0; 
 while ($st = mysqli_fetch_array($rows,MYSQLI_BOTH)) {
	$idg[$i]=$st['id_game'];
	$game[$i]=$st['game_name'];
 $i++;
 }
 $k=0; 
 $zapr1="SELECT  id_store,store_name  FROM store";
 $rows1=mysqli_query($con,$zapr1);
 while ($st1= mysqli_fetch_array($rows1,MYSQLI_BOTH)) {
	$ids[$k]=$st1['id_store'];
	$store[$k]=$st1['store_name'];
 $k++;
 }
 ?>
<p><html>
<head> <title> Добавление нового ключа </title> </head>
<body>
<H2>Внесение ключа:</H2>
<form action="save_new.php" metod="get">
 Дата приобретения: <input name="purchase" size="50" type="date">
<br>Дата окончания: <input name="expiration" size="40" type="date">
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
 <br>Стоимость: <input name="cost" size="11" type="number">
<br>Ключ: <input name="dkey" size="30" type="text"><br>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="../index.php"> Вернуться к списку</a>
</body>
</html>