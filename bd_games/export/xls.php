<!doctype>
<html>
<head>
</head>
<body>
<?php
$dataArray = array(
 array(
 '№ п/п',
 'Название',
 'Жанр',
 'Разработчик',
 'Издатель',
 'Цифровой ключ',
 'Дата приобретения',
 'Дата окончания',
 'URL магазина',
 ),
 array(
 '',
 '',
 '',
 '',
 )
);
require_once('Classes/PHPExcel.php');
	 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 //$connect_error = 'Нет такой таблицы';
 $con = new mysqli("localhost", "root", "", "games");
//$con = mysqli_connect('localhost', 'root');
 //mysqli_select_db($con,'games') or die($connect_error);
 $zapr="SELECT id_game, game_name, game_genre, game_developer, game_publisher FROM game";// WHERE id_game='1'";//".$_GET['id']."'";
 //$zapr="SELECT id_game, game_name, game_genre, game_developer, game_publisher FROM game";
 $rows=mysqli_query($con,$zapr);
 while ($st = mysqli_fetch_array($rows,MYSQLI_BOTH)) {
  echo $st['game_name'];
  $s=$st['game_name'];
 }



//for ()

// назва файла
$filename = "Games.xlsx";

// создание объекта php excel
$doc = new PHPExcel();

// установить лист
$doc->setActiveSheetIndex(0);
$sheet = $doc->getActiveSheet();

$sheet->getColumnDimension("B")->setWidth(15);
$sheet->getColumnDimension("C")->setWidth(15);
$sheet->getColumnDimension("D")->setWidth(15);
$sheet->getColumnDimension("E")->setWidth(15);
$sheet->getColumnDimension("F")->setWidth(15);
$sheet->getColumnDimension("I")->setWidth(15);
$sheet->getColumnDimension("G")->setWidth(20);
$sheet->getColumnDimension("H")->setWidth(15);
// чтение данных в лист
$doc->getActiveSheet()->fromArray($dataArray);

//save our workbook as this file name
//mime type
//OLD EXCEL header('Content-Type: application/vnd.ms-excel'); 
//NEW EXCEL
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//tell browser what's the file name
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0'); //no cache
// clean data
ob_end_clean();
//OLD EXCEL $objWriter = PHPExcel_IOFactory::createWriter($doc, 'Excel5');
//NEW EXCEL 
$objWriter = PHPExcel_IOFactory::createWriter($doc, 'Excel2007');

//force user to download the Excel file without writing it to server's HD
$objWriter->save('php://output');
exit;

?>

</body>
</html>