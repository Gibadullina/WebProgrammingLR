<?php
 echo "<b>Самостоятельная работа 2-5</b> <br> Вариант 7 <br>";
 $a=rand(-20,20);
 $b=rand(-20,20);
  function f($u, $t) {
    if ( $u >= 0 && $t >= 0 ){
        return ($u+$t)/($u*$t);
    }elseif ( $u <0 && $t >= 0 ){
        return $u*$u+$t/$u;
    }elseif ($u>=0 && $t<0){
        return $u+2*$t;
    }elseif ($u<0 && $t<0){
	return ($t*$t+$u)/($u**3)/($t**4);
          }
       }
	   if ($a<>0 and $b<>0 and ($a*$b**2-$a)<>0){
  $Z=f($a/$b,($b**8-$a**7)/($a*$b))+f(($a**10+$b**12)/($a*$b**2-$a),$b);
   echo "Число a=".$a.", число b=".$b."<br/>";
   echo "Z=".$Z;
	   }
	   else {
		   echo "Ошибка! Деление на ноль";
	   }
?>
