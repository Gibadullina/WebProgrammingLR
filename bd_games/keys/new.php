<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 //$connect_error = 'Нет такой таблицы';
 $con = new mysqli("localhost", "root", "", "games");
//$con = mysqli_connect('localhost', 'root');
 //mysqli_select_db($con,'games') or die($connect_error);
 $zapr="SELECT  id_game, game_name,store_name FROM game, store";
 $rows=mysqli_query($con,$zapr);
 while ($st = mysqli_fetch_array($rows,MYSQLI_BOTH)) {
  $id=$_GET['game'];
 $name = $st['game_name'];
 $genre = $st['game_genre'];
 $developer = $st['game_developer'];
 $publisher = $st['game_publisher'];
 $sale = $st['game_sale'];
 }
 ?>
<p><html>
<head> <title> Добавление нового ключа </title> </head>
<body>
<H2>Внесение ключа:</H2>
<form action="save_new.php" metod="get">
 Дата приобретения: <input name="purchase" size="50" type="date">
<br>Дата окончания: <input name="expiration" size="40" type="date">
<P> Игра:  <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="$id" SELECTED> <?php echo $name; ?>
 <OPTION VALUE="2"> госпожа
 <OPTION VALUE="3"> товарищ
 </SELECT>
 <br>Стоимость: <input name="cost" size="11" type="number">
<br>Издатель: <input name="publisher" size="30" type="text"
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="../index.php"> Вернуться к списку игр </a>
</body>
</html>