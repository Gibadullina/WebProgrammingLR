<HTML>
<HEAD> <TITLE> Задача 3-4</TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 </b>Логин:</b>
 <INPUT type="text" name="t" size="15">
 <P> <INPUT type="submit" name="obr" value="Вход">
</FORM>
<?
$t=($_POST["t"]);
$t1="Здравствуйте, ";
if (isset($_POST["obr"])) {	
    if (is_null($t)){	
        echo "Введите логин!";
     } else {
  switch ($t) {
 // смотрим, чему равна переменная $z
  case Ivanov_php:
 // 1 — это Ivanov_php
    $t2="Иванов Иван Иванович";
  break;
  case Fedoseev_php:
 // 2 — это Fedoseev_php
   $t2="Федосеев Кирилл Сергеевич";
  break;
  case Petrov_php:
 // 3 — это простые
  $t2="Петров Эдуард Олегович";
  break;
  case Nikolaev_php:
 // 4 — это  составные
  $t2="Николаев Андрей Антонович";
  break;
  default: //don't register
    $t1="Вы не зарегистрированный пользователь!";
  break;
   }
  echo $t1.$t2;
} }
 
?>
</BODY> </HTML>