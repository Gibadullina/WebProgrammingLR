<html>
<head> <title> Сведения о играх </title> 
<style type="text/css">
.tabs { width: 100%; padding: 0px; margin: 0 auto; }
.tabs>input { display: none; }
.tabs>div {
    display: none;
    padding: 12px;
    border: 1px solid #C0C0C0;
    background: #FFFFFF;
}
.tabs>label {
    display: inline-block;
    padding: 7px;
    margin: 0 -5px -1px 0;
    text-align: center;
    color: #666666;
    border: 1px solid #C0C0C0;
    background: #E0E0E0;
    cursor: pointer;
}
.tabs>input:checked + label {
    color: #000000;
    border: 1px solid #C0C0C0;
    border-bottom: 1px solid #FFFFFF;
    background: #FFFFFF;
}
#tab_1:checked ~ #txt_1,
#tab_2:checked ~ #txt_2,
#tab_3:checked ~ #txt_3,
#tab_4:checked ~ #txt_4 { display: block; }
</style></head>
<body>
<?php
$connect_error = 'Нет такой БД';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'games') or die($connect_error);
?>
<div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Игры</label>
	<input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Ключи</label>
	<input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Цифровые магазины</label>
	
	<div id="txt_1">
<h2>Игры:
<table border="1">
<tr> <!--// вывод «шапки» таблицы-->
 <th> Название </th> <th> Жанр </th>
  <th> Разработчик </th> <th> Издатель </th> <th> Объем продаж </th> 
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($con,"SELECT id_game, game_name, game_genre, game_developer, game_publisher,game_sale FROM game"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['game_name'] . "</td>"; //название
 echo "<td>" . $row['game_genre'] . "</td>";  //жанр
 echo "<td>" . $row['game_developer'] . "</td>"; //разраб
 echo "<td>" . $row['game_publisher'] . "</td>"; //издатель
 echo "<td>" . $row['game_sale'] . "</td>"; //прод
 echo "<td><a href='games/edit.php?id=" . $row['id_game']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='games/delete.php?id=" . $row['id_game']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего игр: $num_rows </p>");
?>
<p> <a href="games/new.php"> Добавить игру</a>
</div>
<!-- Вкладка с ключами______________________-->
 <div id="txt_2">
        <h2>Ключи:
<table border="1">
<tr> <!--// вывод «шапки» таблицы-->
 <th> Название </th> <th> Жанр </th>
  <th> Разработчик </th> <th> Издатель </th> <th> Объем продаж </th> 
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
/*$result=mysqli_query($con,"SELECT id_game, game_name, game_genre, game_developer, game_publisher,game_sale FROM game"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['game_name'] . "</td>"; //название
 echo "<td>" . $row['game_genre'] . "</td>";  //жанр
 echo "<td>" . $row['game_developer'] . "</td>"; //разраб
 echo "<td>" . $row['game_publisher'] . "</td>"; //издатель
 echo "<td>" . $row['game_sale'] . "</td>"; //прод
 echo "<td><a href='keys/edit.php?id=" . $row['id_game']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='keys/delete.php?id=" . $row['id_game']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего игр: $num_rows </p>");*/
?>
<p> <a href="keys/new.php"> Добавить ключ</a>
    </div>
	<!--Цифровые магазины========================================================-->
	 <div id="txt_3">
	  <h2>Цифровые магазины:
<table border="1">
<tr> <!--// вывод «шапки» таблицы-->
 <th> Название </th> <th> Жанр </th>
  <th> Разработчик </th> <th> Издатель </th> <th> Объем продаж </th> 
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
/*$result=mysqli_query($con,"SELECT id_game, game_name, game_genre, game_developer, game_publisher,game_sale FROM game"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['game_name'] . "</td>"; //название
 echo "<td>" . $row['game_genre'] . "</td>";  //жанр
 echo "<td>" . $row['game_developer'] . "</td>"; //разраб
 echo "<td>" . $row['game_publisher'] . "</td>"; //издатель
 echo "<td>" . $row['game_sale'] . "</td>"; //прод
 echo "<td><a href='keys/edit.php?id=" . $row['id_game']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='keys/delete.php?id=" . $row['id_game']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего игр: $num_rows </p>");*/
?>
<p> <a href="keys/new.php"> Добавить ключ</a>
	 </div>
</div>
<p> <a href=".php"> Экспорт .xls</a>