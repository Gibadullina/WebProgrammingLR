<?php 
include ("checkSession.php");
	require_once('export/tcpdf_min/tcpdf.php');
	ob_clean();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli("localhost", "root", "", "games");

	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// Устанавливаем информацию о документе
$pdf->SetAuthor('Имя автора');
$pdf->SetTitle('Название документа');
// Устанавливаем данные заголовка по умолчанию
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
// Устанавливаем верхний и нижний колонтитулы
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// Устанавливаем моноширинный шрифт по умолчанию
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// Устанавливаем отступы
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// Устанавливаем автоматические разрывы страниц
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//указываем путь к файлу
$font = 'Roboto-Medium.ttf';
// преобразуем шрифт
$fontname = TCPDF_FONTS::addTTFfont($font, 'TrueTypeUnicode', '', 96);
$pdf->SetFont($fontname, '', 9, '', true);
// Добавляем страницу
$pdf->AddPage();
$zapr="SELECT id_game, game_name, game_genre, game_developer, game_publisher,
 digital_key,purchase_date,expiration_date,store_url FROM game_info,d_key,store WHERE d_key.game=game_info.id_game AND d_key.store=store.id_store ";
 //$zapr="SELECT id_game, game_name, game_genre, game_developer, game_publisher FROM game";
 $rows1=mysqli_query($con,$zapr);
 $i=1;
 while ($st = mysqli_fetch_array($rows1,MYSQLI_BOTH)) {
  $count++;
  $rows = $rows. "<tr>";
  $rows = $rows. "<td>".$i."</td>";
  $rows = $rows. "<td>".$st['game_name']."</td>";
  $rows = $rows. "<td>".$st['game_genre']."</td>";
  $rows = $rows. "<td>".$st['game_developer']."</td>";
  $rows = $rows. "<td>".$st['game_publisher']."</td>";
  $rows = $rows. "<td>".$st['digital_key']."</td>";
  $rows = $rows. "<td>".date('d-m-Y',strtotime($st['purchase_date']))."</td>";
  $rows = $rows. "<td>".date('d-m-Y',strtotime($st['expiration_date']))."</td>";
  $rows = $rows. "<td>".$st['store_url']."</td>";
  $rows = $rows. "</tr>";
  $i++;
 }

 
// Текст
$html = "
<h2> Игры </h2>
	<table>
		<tr>
			<td>№ п/п</td> 
 <td>Название</td>
 <td>Жанр</td>
 <td>Разработчик</td>
<td>Издатель</td>
<td>Цифровой ключ</td>
 <td>Дата приобретения</td>
 <td>Дата окончания</td>
 <td>URL магазина</td></tr>
	
". $rows ."</table>";
// Выводим текст с помощью writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// Закрываем и выводим PDF документ
$pdf->Output('Games.pdf', 'I');
?>

	
 ?>