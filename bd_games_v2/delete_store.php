<?php
include ("../checkSession.php");
$connect_error = 'Нет такой БД';
$con = mysqli_connect('localhost', 'root','','games');
 $zapros="DELETE FROM store WHERE id_store='" . $_GET['id']."'";
 mysqli_query($con,$zapros);
 $zapros="DELETE FROM d_key WHERE store='" . $_GET['id']."'";
 mysqli_query($con,$zapros);
 header("Location: index.php");
 exit;
?>
