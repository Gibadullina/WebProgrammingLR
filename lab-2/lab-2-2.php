<?php
 $param=rand(3,20);
echo 'Массив из '.$param.' элементов, заполненный случайными числами:'.'<br>';
 for ($i=1;$i<=$param;$i++) {
	 $myarr[$i]=rand(10,99);
	 echo $myarr[$i].' ';
 }
     echo '<br>'.'<br>';
	 //Сортировка массива
	      echo "Отсортированный массив:".'<br>';
	      sort($myarr);
	   for ($i=1; $i<=$param;$i++){
	            echo $myarr[$i-1].' ';
				}
		 echo '<br>'.'<br>';
		 
	//Обратный порядок
	       echo "Массив в обратном порядке:".'<br>';	
	       $myarr1=array_reverse($myarr);
	    for ($i=1; $i<=$param;$i++){
	      echo $myarr1[$i-1].' ';
		  }
	     echo '<br>'.'<br>';
	
	//Удаление последнего элемента
	       echo "Удаление последнего элемента:".'<br>';
		   array_pop($myarr1);
	    for ($i=1; $i<=$param;$i++){
	      echo $myarr1[$i-1].' ';
		  }
	     echo '<br>'.'<br>';
     //Кол-во элементов
    $mycount=count($myarr1);
	//Сумма элементов массива
	$sum=0;
		 for ($i=1; $i<=$mycount;$i++){
	          $sum=$sum+$myarr1[$i-1];
		  }
	//Среднее арифмтеическое
	 echo "Среднее арифмтеическое элементов массива:".'<br>'.$sum/$mycount;
	 	     echo '<br>'.'<br>';
			 
	 //Проверка наличия числа 50
	 if (in_array(50,$myarr)) {
		 echo 'В массиве есть число 50.';
	 }
	      else {echo 'В массиве нет числа 50.';}
		  echo '<br>'.'<br>';
		  
	//Удаление повторяющихся элементов	  
	       echo "Удаление повторяющихся элементов:".'<br>';	
		    $myarr2=array_unique($myarr1);
		 for ($i=0; $i<=count($myarr2);$i++){
	      echo $myarr2[$i].' ';	          
		  }			
?>