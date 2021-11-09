<?php
$N=rand (1,1000);
//$N=284; $M=220;
$M=rand (1,1000);
$sumDN=0;
$sumDM=0;
	echo "<p style='font-size:15'> Вариант 2 </p>";  
echo 'Делители числа '.$N.': ';
 for ($i=1; $i<$N;$i++) {
     if ($N%$i==0)  {echo $i.', ';
		 $sumDN=$sumDN+$i;}
 }
 echo '<br>';
 echo 'Делители числа '.$M.': ';
   for ($i=1; $i<$M;$i++) {
     if ($M%$i==0)  {echo $i.', '; 
	 $sumDM=$sumDM+$i;}
 }
  echo '<br>';
 echo 'Сумма делителей для числа '.$M.'='.$sumDM.' и cумма делителей для числа '.$N.'='.$sumDN.'<br>';
 if (($sumDM == $N) AND ($sumDN==$M)) {echo ("Поэтому числа дружественны");}
else {echo ("Поэтому числа не дружественны");}
 
 echo "<p style='font-size:15'><center> Вариант 7 <center></p>";
?>