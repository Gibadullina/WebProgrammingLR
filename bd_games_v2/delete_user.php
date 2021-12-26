<?php
include ("checkSession.php");
$connect_error = 'Нет такой БД';
$con = mysqli_connect('localhost', 'root','','games');
 $zapros="DELETE FROM users WHERE id_users='" . $_GET['id']."'";
 mysqli_query($con,$zapros);
 header("Location: index.php");
 exit;
?>
