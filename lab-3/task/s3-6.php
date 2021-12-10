<?php //if ($_POST["f"].checked==checked)
 $text=$_POST["t"];

 $c=$_POST["c"];
 if (!(strlen($text))){
	 echo "Вы не ввели корректный текст";
 } else {
	 echo "Ваш текст:<br> ".$text."<br><br>";
	if (isset($_POST["f1"]) and isset($_POST["a"]) and (is_numeric($_POST["a"]))) {
		if (is_numeric($_POST["a"])) { echo "Введите число в 1 пункте";}
	 $a=$_POST["a"];
	 if ($a<10) {
	 switch ($a){
		 case 1:
		 $t1=$a." буквы:<br>";
		 break;
		 default:
		 $t1=$a." букв: <br>";
		 break;		 
	 }
 echo "Список слов из Вашего текста, которые состоят из ".$t1;
 	 $tok = strtok($text, " ");
  while ($tok !== false) {
	 if ((mb_strlen($tok))==$a)
    echo $tok."<br>";
    $tok = strtok(" ");
  } 
  } else {echo "Количество букв не должно превышать 10";
  }
 }  if (isset($_POST["f2"])){
	   $str2=mb_str_split1 ($text);
	   echo "<br>Преобразованный текст: <br>";
	  for ($i=0; $i<=(count($str2));$i++) {
		  if( preg_match("/[A-Za-z]/", $str2[$i]) ) {
			  $str2[$i]=mb_strtoupper($str2[$i]);}
	  echo $str2[$i];
	  } 	  echo "<br>";
    }
    if (isset($_POST["f3"]) and isset($_POST["b"]) and isset($_POST["c"])) {
		if ((mb_strlen($_POST["b"])==1) and (mb_strlen($_POST["c"])==1)) {
	  $b=$_POST["b"];
	  echo "<br>Число вхождений символа ".$b." в строку: ".(substr_count($text,$b));
	  $с=$_POST["c"];
	  echo "<br>Число вхождений символа ".$c." в строку: ".(substr_count($text,$c));
	}	}
 }
echo ("<BR> <A href='s3-6.html'> Вернуться назад </A>");
function mb_str_split1($str)
    {
        preg_match_all('#.{1}#uis', $str, $out);
        return $out[0];
    }
?>
