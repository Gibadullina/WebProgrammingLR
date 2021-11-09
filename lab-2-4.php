<?php
$dn=rand(1,7);
print ($dn ." - номер дня недели <br>");
switch ($dn) {
case 1: print ("это понедельник"); break;
case 2: print ("это вторник"); break;
case 3: print ("это среда"); break;
case 4: print ("это четверг"); break;
case 5: print ("это пятница"); break;
case 6: print ("это суббота"); break;
case 7: print ("это воскресенье");
}
?>