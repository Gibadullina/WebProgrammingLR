<HTML>
<HEAD> <TITLE> Угадай число </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите число от 1 до 10:
 <INPUT type="text" name="a" size="3">
 <INPUT type="hidden" name="h" value="5"> // угадываемое число
 <P> <INPUT type="submit" name="obr" value="Проверить">
</FORM>
<?
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["h"]) { echo($_POST["a"]." - УГАДАЛИ!");
 } else {
 if ($_POST["a"]>$_POST["h"]) {
 echo($_POST["a"]." - МНОГО...");
 } else { echo($_POST["a"]." - МАЛО..."); }
 } }
?>
</BODY> </HTML>