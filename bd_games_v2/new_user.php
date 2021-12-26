<?php include ("checkSession.php"); ?>
<p><html>
<head> <title> Добавление нового пользователя </title> </head>
<body>
<H2>Внесение сведений о пользователе:</H2>
<form action="save_new_user.php" metod="get">
 Логин: <input name="name" size="50" type="text">
<br>URL: <input name="url" size="40" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к таблицам </a>
</body>
</html>