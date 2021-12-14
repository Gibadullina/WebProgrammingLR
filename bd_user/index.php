<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
$connect_error = 'Нет такой БД';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'users') or die($connect_error);
?>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr> <!--// вывод «шапки» таблицы-->
 <th> Имя </th> <th> E-mail </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($con,"SELECT id_user, user_name, user_e_mail FROM user"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['user_name'] . "</td>";
 echo "<td>" . $row['user_e_mail'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>