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
 
 echo "<p style='font-size:15'> Вариант 7 </p>";
 $N=rand (1,1000);
 //$N=14;
 $ch=true;
  echo 'Число N = '. $N.'<br>';
   for ($i=1; $i<(sqrt($N)); $i++){
     for ($j=$i+1; $j<(sqrt($N)); $j++){
	   for ($k=$j+1; $k<(sqrt($N)); $k++){
	        if ($i*$i+$j*$j+$k*$k==$N) {
				echo 'Число N можно разложить на сумму квадратов следующим образом: 
				'.$i.'^2+'.$j.'^2+'.$k.'^2'.'<br>';
				$ch=false;
			}
	   }
	 }
   }
    if ($ch) { echo 'Число N не возможно разложить на сумму квадратов 3 чисел';}
  
?>