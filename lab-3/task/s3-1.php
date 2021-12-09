<? 
$t1="Большее число: ";
$t2="Числа равны";
$a=($_POST["a"]);
$b=($_POST["b"]);
if ($a>$b) {
  echo ($t1.$a);
  } elseif ($a<$b) {
	echo ($t1.$b);
  } else {($t2);}
echo ("<BR> <A href='s3-1.html'> Вернуться назад </A>");
?>
