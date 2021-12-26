<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новый пользователь</title>
</head>
<body>
	<?php 
	include ("checkSession.php") ?>
	<H2>Регистрация на сайте:</H2>
	<form action="save_new_user.php" metod="get">
	 Логин: <input name="name" size="50" type="text">
	<br>Пароль: <input name='password1' size='40' type='password'>
    <br>Проверка Пароля: <input name='password2' size='40' type='password'>
	<br>
	Тип пользователя <select name="type">
		<option value="1">Оператор</option>
		<option value="2">Администратор</option>
	</select>
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку пользователей </a>
</body>
</html>