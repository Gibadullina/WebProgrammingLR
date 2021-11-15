<?php
 //Массив треугольных чисел
 echo 'Массив треугольных чисел'.'<br>';
 for ($n=1; $n<11; $n++) {
	 $treug[$n]=$n*($n+1)/2;
 echo $treug[$n].' '; }
 
 echo '<br>'.'<br>';
  //Массив квадратов нат чисел
 echo 'Массив квадратов натуральных чисел'.'<br>';
  for ($n=1; $n<11; $n++){
	  $kvd[$n]=$n*$n;
  echo $kvd[$n].' '; }
  echo '<br>'.'<br>';
  //Объединение массивов
  echo 'Объединение массивов'.'<br>';
  $rez=array_merge($treug,$kvd);
  for ($i=0; $i<count($rez);$i++){
	  echo $rez[$i].' ';
  }
    echo '<br>'.'<br>';
  //Сортировка массива rez
  echo 'Сортировка массива'.'<br>';

  for ($i=0; $i<count($rez);$i++){
	  for ($k=$i+1; $k<count($rez);$k++){
	  if ($rez[$i]>$rez[$k]) {
		  $j=$rez[$k];
		  $rez[$i]=$c;
		  $rez[$k]=$rez[$i];
	  }}
	for ($i=0; $i<count($rez);$i++){
	  echo $rez[$i].' ';
  }
  }
?>