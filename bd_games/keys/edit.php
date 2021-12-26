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
 $zapr="SELECT purchase_date, expiration_date, game, store, key_cost,digital_key FROM d_key WHERE id_digital_key='".$_GET['id']."'";
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
 //запрос для игр и магазинов
  $zapr2="SELECT  id_game, game_name FROM game";
 $rows2=mysqli_query($con,$zapr2);
 $i=0; 
 while ($st2 = mysqli_fetch_array($rows2,MYSQLI_BOTH)) {
	 /*if ($st2['id_game']=$game) {
		 $gname=$st2['game_name'];
	 }else{*/
	$idg[$i]=$st2['id_game'];
	$game[$i]=$st2['game_name'];//}
 $i++;
 } echo $game[1];
 $k=0; 
 $zapr1="SELECT  id_store,store_name  FROM store";
 $rows1=mysqli_query($con,$zapr1);
 while ($st1= mysqli_fetch_array($rows1,MYSQLI_BOTH)) {
	 if ($st1['id_store']=$store){
		 $sname=$st1['store_name'];
	 }else {
		$ids[$k]=$st1['id_store'];
 $store[$k]=$st1['store_name'];}
 $k++;
 }
 //echo  $gname;
print "<form action='save_edit.php' metod='get'>";
print "Дата приобретения: <input name='purchase' size='50' type='date'
value='".$purchase."'>";
print "<br>Дата окончания: <input name='genre' size='50' type='date'
value='".$genre."'>";
//combobox game--------------------------
print '<br>Игра:  <SELECT NAME="game" style="width: 200px;">';
  print '<OPTION VALUE="'.$idg[0].'" SELECTED>'. $gname; 
// print '<OPTION VALUE="'.$idg[2].'" >'.$game[1]; 
 print '</SELECT>';
print "<br>Игра: <input name='developer' size='50' type='text'
value='".$developer."'>";
//cjv,o,ox store---------------
print "<br>Издатель: <input name='publisher' size='50' type='text'
value='".$publisher."'>";
//-----------------------------------------
print "<br>Стоимость: <input name='cost' size='11' type='number'
value='".$cost."'>";
print "<br>Цифровой ключ: <input name='dkey' size='20' type='text'
value='".$dkey."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"..\index.php\"> Вернуться к спискам</a>";
?>
</body>
</html>