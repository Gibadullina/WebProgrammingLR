<? if ($_POST["f"].checked==checked)
 $text=$_POST["t"];
 $f1=$_POST["f1"];
 $f2=$_POST["f2"];
 $f3=$_POST["f3"];
 $a=$_POST["a"];
 $b=$_POST["b"];
 $c=$_POST["c"];
 echo "Helllp <br>";
 if ((is_null($text))){
	 echo "Вы не ввели корректный текст";
 } else {
	 echo mb_strlen($text)."<br>";
	 $tok = strtok($text, " ");
  while ($tok !== false) {
    echo mb_strlen($tok)."<br>";
    $tok = strtok(" ");
}
 }
 
echo ("<BR> <A href='s3-6.html'> Вернуться назад </A>");
?>
