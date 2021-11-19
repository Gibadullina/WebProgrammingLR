<?php
  
  //Ассоциативный массив
  echo 'Ассоциативный массив:'.'<br>';
    $myarr = array("cnum" => "2001",
               "cname" => "Hoffman",
               "city" => "London",
			   "snum" => "1001");
			   
	foreach($myarr as $key => $value)
          {
     echo "$key = $value <br />";
          }
?>