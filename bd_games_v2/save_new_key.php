<?php
include ("checkSession.php");
 // Подключение к базе данных:
$connect_error = 'Нет такой таблицы';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'games') or die($connect_error);
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO d_key SET purchase_date='" . $_GET['purchase']
."', expiration_date='".$_GET['expiration']."',game='"
.$_GET['game']."', store='".$_GET['store'].
"', key_cost='".$_GET['cost']. "', digital_key='".$_GET['dkey']."'";
 mysqli_query($con, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($con)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы внесли информацию о ключе.";
 print "<p><a href=\"index.php\"> Вернуться к спискам</a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к спискам </a>"; }
?>
