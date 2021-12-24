<p><html>
<head> <title> Добавление новой игры </title> </head>
<body>
<H2>Внесение игры:</H2>
<form action="save_new.php" metod="get">
 Название: <input name="name" size="50" type="text">
<br>Жанр: <input name="genre" size="40" type="text">
<br>Разработчик: <input name="developer" size="30" type="text">
<br>Издатель: <input name="publisher" size="30" type="text">
<br>Объем продаж (млн): <input name="sale" size="11" type="number">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="../index.php"> Вернуться к списку игр </a>
</body>
</html>