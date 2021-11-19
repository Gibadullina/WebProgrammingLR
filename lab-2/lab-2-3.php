<?php
  
  //Ассоциативный массив
  echo 'Ассоциативный массив:'.'<br>';
    $myarr = array("cnum" => "2001",
               "cname" => "Hoffman",
               "city" => "London",
			   "snum" => "1001");
			   
	 foreach($myarr as $key => $value){
      echo "$key = $value <br />";
          }
		  
  //Добавление элемента
    echo '<br>Добавление элемента:<br>';
	$myarr["rating"]=100;
		foreach($myarr as $key => $value){
             echo "$key = $value <br />";
          }
		  
	//Сортировка элементов массива
	   echo '<br>Сортировка элементов массива:<br>';
	   asort ($myarr);
	  		foreach($myarr as $key => $value){
             echo "$key = $value <br />";
          } 

	
	//Сортировка ключей массива
	   echo '<br>Сортировка ключей массива:<br>';	
	   	   ksort ($myarr);
		foreach($myarr as $key => $value){
          echo "$key = $value <br />";
          }	
	//Сортировка with sort()
		   echo '<br>Сортировка массива:<br>';
	   sort ($myarr);
	  		foreach($myarr as $key => $value){
             echo "$key = $value <br />";
          } 
?>