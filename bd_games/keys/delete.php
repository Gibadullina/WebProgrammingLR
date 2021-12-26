<?php
$connect_error = 'Нет такой БД';
$con = mysqli_connect('localhost', 'root','','games');
  $zapros="DELETE FROM d_key WHERE id_digital_key='" . $_GET['id']."'";
 mysqli_query($con,$zapros);
 header("Location: ../index.php");
 exit;
?>
