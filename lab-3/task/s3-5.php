<HTML>
<HEAD> <TITLE> Задача 3-5</TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P><B>Анкета "Ваш характер"</P></B>
 </b>Введите Ваше имя</b><br>
 <INPUT type="text" name="im" size="20"> 
 <br></b>Ответьте да или нет на следующие вопросы:</b> 
  <br>1. Считаете ли Вы, что у многих ваших знакомых хороший характер? <br>
  <INPUT type="radio" name="1" value="0" checked> да 
  <INPUT type="radio" name="1" value="1">нет
  <br><br>2. Раздражают ли Вас мелкие повседневные обязанности?<br>
  <INPUT type="radio" name="2" value="0"checked>да 
  <INPUT type="radio" name="2" value="1"> нет
  <br><br>3. Верите ли Вы, что ваши друзья преданы Вам? <br>
 <INPUT type="radio" name="3" value="1" checked> да 
 <INPUT type="radio" name="3" value="0"> нет
  <br><br>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? <br>
  <INPUT type="radio" name="4" value="0" checked>да 
  <INPUT type="radio" name="4" value="1">нет
  <br><br>5. Способны ли Вы ударить собаку или кошку? <br>
  <INPUT type="radio" name="5" value="0" checked>да  
  <INPUT type="radio" name="5" value="1">нет
  <br><br>6. Часто ли Вы принимаете лекарства? <br>
  <INPUT type="radio" name="6" value="0" checked>да 
  <INPUT type="radio" name="6" value="1"> нет
  <br><br>7. Часто ли Вы меняете магазин, в который ходите за продуктами? <br>
  <INPUT type="radio" name="7" value="0" checked>да 
  <INPUT type="radio" name="7" value="1">нет
  <br><br>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? <br>
  <INPUT type="radio" name="8" value="0" checked>да 
  <INPUT type="radio" name="8" value="1"> нет
  <br><br>9. Тяготят ли Вас общественные обязанности? <br>
  <INPUT type="radio" name="9" value="1" checked> да 
  <INPUT type="radio" name="9" value="0">нет
  <br><br>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? <br>
  <INPUT type="radio" name="10" value="1" checked> да 
  <INPUT type="radio" name="10" value="0">нет
  <br><br>11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <br>
  <INPUT type="radio" name="11" value="0" checked>да 
  <INPUT type="radio" name="11" value="1">нет
  <br><br>12. Сохранилась ли у Вас фигура по сравнению с прошлым? <br>
  <INPUT type="radio" name="12" value="0" checked>да 
  <INPUT type="radio" name="12" value="1">нет
  <br><br>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? <br>
 <INPUT type="radio" name="13" value="1" checked> да 
 <INPUT type="radio" name="13" value="0">нет
  <br><br>14. Нравится ли Вам семейная жизнь? <br>
  <INPUT type="radio" name="14" value="1" checked>да 
  <INPUT type="radio" name="14" value="0">нет
  <br><br>15. Злопамятны ли Вы? <br>
  <INPUT type="radio" name="15" value="0" checked> да 
  <INPUT type="radio" name="15" value="1">нет
  <br><br>16. Находите ли Вы, что стоит погода, типичная для данного времени года? <br>
  <INPUT type="radio" name="16" value="0" checked> да 
  <INPUT type="radio" name="16" value="1">нет
  <br><br>17. Случается ли Вам с утра быть в плохом настроении? <br>
  <INPUT type="radio" name="17" value="0" checked> да 
  <INPUT type="radio" name="17" value="1">нет
   <br><br>18. Раздражает ли Вас современная живопись? <br>
  <INPUT type="radio" name="18" value="0" checked> да 
  <INPUT type="radio" name="18" value="1">нет
   <br><br>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? <br>
   <INPUT type="radio" name="19" value="1" checked>да 
   <INPUT type="radio" name="19" value="0">нет
   <br><br>20. Надоедает ли Вам делать лабораторные по PHP?<br>
  <INPUT type="radio" name="20" value="0" checked>да 
  <INPUT type="radio" name="20" value="1">нет
 <P> <INPUT type="submit" name="obr" value="Отправить анкету">
</FORM>
<?
$im=($_POST["im"]);
$t2="Ошибка! Введите имя";
$sum=0;
if (isset($_POST["obr"])) {
	if ((is_null($im))){	echo $t2;
	} else {
		for ($i=1; $i<=20;$i++) {			
			 $sum=$sum+($_POST["$i"]);
}} 
	  if ($sum>15) { 
	   $t1='у Вас покладистый характер';
	  } elseif (($sum<=15) and ($sum>=8)) {
       $t1='Вы не лишены недостатков,но с вами можно ладить';
	  } else { $t1="Вашим друзьям можно посочувствовать";}
	  echo $im.", ".$t1;
    }
?>
</BODY> </HTML>