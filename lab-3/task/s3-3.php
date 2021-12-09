<HTML>
<HEAD> <TITLE> Задача 3-3</TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 </b>Число N:</b>
 <INPUT type="text" name="n" size="3">
 <br></b>Характеристика чисел:</b> 
  <SELECT NAME="z" SIZE="1">
  <OPTION VALUE="1" SELECTED> четные
  <OPTION VALUE="2"> нечетные
  <OPTION VALUE="3"> простые
  <OPTION VALUE="4"> составные
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Вывести числа">
</FORM>
<?
  include "s3-3-func.php";
$n=($_POST["n"]);
$t2="Ошибка! Некорректные данные.";
if (isset($_POST["obr"])) {
	if ((is_numeric($n))){		
 switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это четные
 echo "Четные числа от 1 до ".$n.": ";
   for ($i=1;$i<=$n; $i++) {
	   if ($i%2==0) {
	   echo $i." ";
	   }
   }
 break;
 case 2:
 // 2 — это нечетные
  echo "Нечетные числа от 1 до ".$n.": ";
   for ($i=1;$i<=$n; $i++) {
	   if ($i%2<>0) {
	   echo $i." ";
	   }
   }
 break;
 case 3:
 // 3 — это простые
  echo "Простые числа от 1 до ".$n.": ";
   $arr1= getPrimes1 ($n);
    for ($i=0;$i<(count($arr1));$i++){
	echo $arr1[$i]." "; }
 break;
  case 4:
 // 4 — это  составные
  echo "Составные числа от 1 до ".$n.": ";
     $arr2= getPrimes2 ($n);
    for ($i=0;$i<(count($arr2));$i++){
	echo $arr2[$i]." "; }
 break;
   }
  } else {echo $t2;}
 }
 
?>
</BODY> </HTML>