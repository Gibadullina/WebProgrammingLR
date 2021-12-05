<?php
$arr=array();
$temp_arr=array();
$n=rand(1,10);
$m=rand(1,10);
    function Uslovie() {
    echo "Найти среднее арифметическое элементов каждой строки матрицы Q(n,m).<br/>";
 }
function Arr() {
   global $arr;
   global $temp_arr;
   global $n;
   global $m;
for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $m; $j++){
	$l=rand(1,4);
        array_push($temp_arr, $i + $l);
        }
    array_push( $arr, $temp_arr);
    $temp_arr = [];
}}
 function Matrix(){
 global $arr;
   global $n;
   global $m;
 	echo "Матрица Q(".$n.",".$m."):<br/>";
  foreach($arr as $items) {
  foreach($items as $item) {
    echo $item.'|';
  }
  echo "<br>";
}
echo "<br>";
}
  function Avg(){
   global $n;
   global $m;
   global $arr;
   $sum=0;
   $count;
   for($i = 0; $i < $n+1; $i++) {
	   if ($i>0) {
		  echo "Среднее арифметическое элементов ".$i."-й строки:";
		  echo  $avg=$sum/$count."<br>";
		  $count=0;
		  $sum=0; 
	   }
    for($j = 0; $j < $m; $j++){
		$sum=$sum+$arr[$i][$j];
		$count++;
	}
   }
  }
?>
