<?php
 $param=rand(3,20);
echo 'Массив из '.$param.' элементов, заполненный случайными числами:'.'<br>';
 for ($i=1;$i<=$param;$i++) {
	 $myarr[$i]=rand(10,99);
	 echo $myarr[$i].' ';
 }
?>