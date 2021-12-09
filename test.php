<?php
$string = "This is an example string";
echo $string."<br>";
/* В качестве разделителей используем пробел, табуляцию и перевод строки */
$tok = strtok($string, " ");
 
while ($tok !== false) {
    echo strlen($tok)."<br>";
    $tok = strtok(" ");
}
?>