<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border=1>
<?php

echo '<br>';
for ($i=0; $i<=9; $i++) { // запускаем первый цикл
 echo ("<tr>"); // начало строки таблицы
 for ($k=1; $k<=10; $k++) { // запускаем второй цикл
 echo ("<td align=center>"); // открываем ячейку таблицы
 $p=$i*10+$k; // находим произведение двух чисел и...
 if ($p %2!==0) echo ($p); // выводим его,
 else echo  "<p style='color:red'>" .$p. " </p>";
 echo ("</td>"); // а потом закрываем ячейку
 }
 echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>