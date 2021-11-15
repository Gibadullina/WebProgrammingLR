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
	  for ($k=0; $k<count($rez);$k++){
	  if ($rez[$i]<$rez[$k]) {
		  $j=$rez[$i];
		  $rez[$i]=$rez[$k];
		  $rez[$k]=$j;
		   }
	}
 }
   for ($i=0; $i<count($rez);$i++){
	  echo $rez[$i].' ';
  }
   echo '<br>'.'<br>'; 
  //Удалене 1st элемента массива rez
  echo 'Удаление первого элемента массива'.'<br>';
  unset ($rez[0]);
  for ($i=0; $i<count($rez);$i++){
	  echo $rez[$i].' ';
  }
     echo '<br>'.'<br>'; 
  //Удаление повторяющихся элементов
  echo 'Удаление повторяющихся элементов'.'<br>';
  $rez1=array_unique($rez);
  for ($i=0; $i<count($rez1);$i++){
	  echo $rez1[$i].' ';
  }
  
?>