<HTML>
<HEAD> <TITLE> Калькулятор </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 </b>Калькулятор:</b><br>
 <INPUT type="text" name="a" size="3">
 <INPUT type="text" name="b" size="3">
 <br></b>Действие:</b> 
  <SELECT NAME="z" SIZE="1">
  <OPTION VALUE="1" SELECTED> сложить
  <OPTION VALUE="2"> вычесть
  <OPTION VALUE="3"> умножить
  <OPTION VALUE="4"> поделить
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Вперед!">
</FORM>
<?
$a=($_POST["a"]);
$b=($_POST["b"]);
$t2="Ошибка! Некорректные данные";
if (isset($_POST["obr"])) {
	if ((is_numeric($a)) and (is_numeric($b))){
 switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это сложение
 $s1=$a+$b;
 $t1=("Результат сложения чисел ".$a." и ".$b.": ");
 break;
 case 2:
 // 2 — это вычитания
 $s1=$a-$b;
 $t1=("Результат вычитания из числа ".$a." число ".$b.": ");
 break;
 case 3:
 // 3 — это умножение
 $s1=$a*$b;
 $t1=("Результат умножения чисел ".$a." и ".$b.": ");
 break;
  case 4:
 // 4 — это деление
  if ($b<>0){
   $s1=$a*$b;
   $t1=("Результат умножения чисел ".$a." и ".$b.": "); 
  } else { $t1=$t2.". b равно нулю";}
 break;
}
echo ($t1.$s1);
  } else { echo $t2;} 
 }
?>
</BODY> </HTML>