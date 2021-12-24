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
 $i=1;
 while ($st = mysqli_fetch_array($rows,MYSQLI_BOTH)) {
  $dataArray[$i][0]=$st["id_game"];
  $dataArray[$i][1]=$st['game_name'];
  $dataArray[$i][2]=$st['game_genre'];
  $dataArray[$i][3]=$st['game_developer'];
  $dataArray[$i][4]=$st['game_publisher'];
  $i++;
 }



//for ()

// назва файла
$filename = "Games.xlsx";

// создание объекта php excel
$doc = new PHPExcel();

// установить лист
$doc->setActiveSheetIndex(0);
$sheet = $doc->getActiveSheet();

$sheet->getColumnDimension("B")->setWidth(40);
$sheet->getColumnDimension("C")->setWidth(40);
$sheet->getColumnDimension("D")->setWidth(25);
$sheet->getColumnDimension("E")->setWidth(25);
$sheet->getColumnDimension("F")->setWidth(17);
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