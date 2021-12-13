<?php
 // Подключение к базе данных:
$connect_error = 'Нет такой таблицы';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'users') or die($connect_error);
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO user SET user_name='" . $_GET['name']
."', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']. "'";
 mysqli_query($con, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($con)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>
