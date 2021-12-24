<!doctype>
<html>
<head>
</head>
<body>
<?php

require_once('Classes/PHPExcel.php');

$dataArray = array(
 array(
 'str1raw1',
 'str1raw2',
 'str1raw3',
 'str1raw4',
 ),
 array(
 'd',
 'str2raw2',
 'str2raw3',
 'str2raw4',
 )
);

// FILENAME
$filename = "result.xlsx";

// create php excel object
$doc = new PHPExcel();

// set active sheet 
$doc->setActiveSheetIndex(0);

// read data to active sheet
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