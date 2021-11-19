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
 
?>