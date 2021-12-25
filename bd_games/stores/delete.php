<?php
$connect_error = 'Нет такой БД';
$con = mysqli_connect('localhost', 'root','','games');
 $zapros="DELETE FROM game WHERE id_game='" . $_GET['id']."'";
 mysqli_query($con,$zapros);
 header("Location: ../index.php");
 exit;
?>
