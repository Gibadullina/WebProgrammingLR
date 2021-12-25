<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 //$connect_error = 'Нет такой таблицы';
 $con = new mysqli("localhost", "root", "", "games");
//$con = mysqli_connect('localhost', 'root');
 //mysqli_select_db($con,'games') or die($connect_error);
 $zapr="SELECT  id_game, game_name,store_name, id_store FROM game, store";
 $rows=mysqli_query($con,$zapr);
 $i=0;
 $k=0;
 while ($st = mysqli_fetch_array($rows,MYSQLI_BOTH)) {
  
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
  for ($n=0;$n<=$i;$n++){
 echo '<OPTION VALUE="'.$idg[$i].'" SELECTED>'. $name; 

 echo '</SELECT>';
 ?>
 <br>Стоимость: <input name="cost" size="11" type="number">
<br>Ключ: <input name="dkey" size="30" type="text"
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="../index.php"> Вернуться к списку игр </a>
</body>
</html>
<!--$con = mysqli_connect('localhost', 'f0597918_users','bnsniMin');
mysqli_select_db($con,'f0597918_users') or die($connect_error);-->