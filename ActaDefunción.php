<?php

	require 'fpdf/fpdf.php';

	$pdf=new FPDF();
	$pdf->AddPage();
	
	$pdf->SetXY(10, 30);
	$pdf->SetFont('Arial','B', 20);
	$pdf->MultiCell(100, 15, utf8_decode('Estados Unidos Mexicanos Acta de Defunción'), 0, 'C', 0);
	
	$pdf->SetXY(135,15);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(65, 4, utf8_decode('Identificador Electrónico'), 0, 1, 'C');
	
	$pdf->SetX(135);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(65, 4, 'XXXXXXXXXXXXXXXXXX', 0, 1, 'C');
	
	$pdf->SetX(135);
	$pdf->Cell(65, 4, 'XXXXXXXXXXXXX', 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->SetFillColor(150, 150, 150);
	$pdf->Cell(80, 5, utf8_decode('Clave Única de Registro de Población'), 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(80, 5, '------------', 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->Cell(80, 2, '', 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(80, 5, utf8_decode('N° de Certificado de Defunción de la SSA'), 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(80, 5, '------------', 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(80, 5, 'Entidad de Registro', 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(80, 5, utf8_decode('XXXXXXXX'), 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(80, 5, utf8_decode('Municipio de Registro'), 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(80, 5, utf8_decode('XXXXXXXX'), 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 6);
	$pdf->Cell(20, 5, utf8_decode('Oficialía'), 1, 0, 'C', true);
	$pdf->Cell(20, 5, 'Libro', 1, 0, 'C', true);
	$pdf->Cell(20, 5, 'Acta', 1, 0, 'C', true);
	$pdf->Cell(20, 5, 'Fecha de Registro', 1, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(20, 5, 'X', 1, 0, 'C');
	$pdf->Cell(20, 5, 'X', 1, 0, 'C');
	$pdf->Cell(20, 5, 'XXX', 1, 0, 'C');
	$pdf->Cell(20, 5, 'XX/XX/XXXX', 1, 1, 'C');
	
	$pdf->SetY(83);
	$pdf->SetFont('Arial','', 15);
	$pdf->Cell(190, 8, 'Datos de la Persona Fallecida:', 1, 1, 'C', true);
	
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(64, 11, utf8_decode('XXXXX'), 'LTB', 0, 'C');
	$pdf->Cell(62, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(64, 11, utf8_decode('XXXXX'), 'TBR', 1, 'C');
	
	$pdf->SetFont('Arial', '', 14);
	$pdf->Cell(64, 11, 'Nombre(s):', 'LT', 0, 'C');
	$pdf->Cell(62, 11, 'Primer Apellido:', 'T', 0, 'C');
	$pdf->Cell(64, 11, 'Segundo Apellido:', 'TR', 1, 'C');
	
	$pdf->SetFont('Arial', '', 14);
	$pdf->Cell(64, 11, utf8_decode('XXXXX'), 'LB', 0, 'C');
	$pdf->Cell(62, 11, utf8_decode('------------'), 'B', 0, 'C');
	$pdf->Cell(64, 11, utf8_decode('XXXXX'), 'BR', 1, 'C');
	
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(64, 9, 'Lugar de Nacimiento:', 'LB', 0, 'C');
	$pdf->Cell(62, 9, 'Entidad de Registro de Nacimiento:', 'B', 0, 'C');
	$pdf->Cell(64, 9, 'Nacionalidad:', 'BR', 1, 'C');
	
	$pdf->setY(135);
	$pdf->SetFont('Arial','', 15);
	$pdf->Cell(190, 8, utf8_decode('Datos de la Defunción:'), 1, 1, 'C', true);
	
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(47.5, 11, utf8_decode('XX/XX/XXXX'), 'LTB', 0, 'C');
	$pdf->Cell(47.5, 11, utf8_decode('XX:XX:XX'), 'TB', 0, 'C');
	$pdf->Cell(47.5, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(47.5, 11, utf8_decode('XXXXX'), 'TBR', 1, 'C');
	
	$pdf->SetFont('Arial', '', 14);
	$pdf->Cell(47.5, 11, 'Fecha:', 'LT', 0, 'C');
	$pdf->Cell(47.5, 11, 'Hora:', 'T', 0, 'C');
	$pdf->Cell(47.5, 11, 'Lugar:', 'T', 0, 'C');
	$pdf->Cell(47.5, 11, utf8_decode('Destino de Cadáver:'), 'TR', 1, 'C');
	
	$pdf->SetFont('Arial', '', 14);
	$pdf->Cell(95, 11, utf8_decode('XXXXX'), 'LB', 0, 'R');
	$pdf->Cell(95, 11, utf8_decode('XXXXX'), 'BR', 1, 'L');
	
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(190, 5, utf8_decode('Causas de la Difunción:'), 'LBR', 1, 'C');
	
	$pdf->SetY(184);
	$pdf->Cell(95, 9, 'Anotaciones Marginales:', 1, 0, 'C', true);
	$pdf->Cell(95, 9, utf8_decode('Certificación:'), 1, 1, 'C', true);
	
	$pdf->SetFont('Arial','', 5);
	$pdf->MultiCell(95, 3, 'Sin anotaciones marginales.', 'LR', 'J', 0);
	
	$pdf->SetXY(105, 193);
	$pdf->SetFont('Arial','', 6);
	$pdf->MultiCell(95, 3, utf8_decode('Se extiende la presente copia certificada, con fundamento en los artículos 618 fracción IV, 634 y 635 del Código Civil de Quintana Roo; 7 fracciones XII, XXVII y XXIX del Reglamento del Registro Civil de Quintana Roo; y 26, fracciones XII, XIX y XXVII del Reglamento Interior de la Secretaría de Gobierno Registro Civil. La Firma Electrónica con la que cuenta es vigente a la fecha de expedición; tiene validez jurídica y probatoria de acuerdo a las disposiciones legales en la materia.'), 'R', 'J', 0);
	
	$pdf->SetY(196);
	$pdf->MultiCell(95, 22, '', 'LRB', 'L', 0);
	$pdf->SetXY(105, 208);
	$pdf->MultiCell(95, 2, '', 'R', 'L', 0);
	$pdf->SetXY(105,210);
	$pdf->SetFont('Arial','', 10);
	$pdf->MultiCell(95, 4, utf8_decode('A LOS 06 DÍAS DEL MES DE NOVIEMBRE DE 2018. DOY FE.'), 'RB', 'L', 0);
	
	$pdf->SetY(220);
	$pdf->Cell(40, 40, '', 1, 0, 'C');
	$pdf->SetX(70);
	$pdf->SetFont('Arial', '', 15);
	$pdf->Cell(130, 8, utf8_decode('Firma Electrónica:'), 0, 1, 'C');
	
	$pdf->SetFont('Arial', '', 7);
	$pdf->SetX(90);
	$pdf->MultiCell(90, 2.5, 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 0, 'J', 0);
	
	$pdf->SetXY(60, 246);
	$pdf->SetFont('Arial', '', 6);
	$pdf->Cell(20, 5, utf8_decode('Código de verificación'), 0,1, 'C');
	
	$pdf->SetX(60);
	$pdf->SetFont('Arial', 'B', 7);
	$pdf->Cell(20, 3, 'XXXXXXXXXXXXXXXXXX', 0, 1, 'C');
	
	$pdf->SetX(60);
	$pdf->Cell(20, 3, 'XXXXXXXXXXXXXXXXXX', 0, 1, 'C');
	
	
	$pdf->SetXY(90, 236);
	$pdf->Cell(83, 15, 'X', 0, 1, 'C');
	
	$pdf->SetX(81);
	$pdf->SetFont('Arial', '', 8);
	$pdf->Cell(83, 4, 'Directora General Registro Civil y Oficial Central', 0, 1, 'R');
	
	$pdf->SetX(81);
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(83, 4, utf8_decode('XXXXXXXXXXXXXXXXXXXXXXXXXX'), 0, 1, 'R');

	$pdf->SetXY(175, 236);
	$pdf->SetFont('Arial', '', 6);
	$pdf->Cell(14, 5, utf8_decode('Código QR'), 0, 1, 'C');
	
	$pdf->SetX(175);
	$pdf->Cell(14, 14, '', 1, 1, 'C');
	
	$pdf->SetY(261);
	$pdf->SetFont('Arial', '', 7);
	$pdf->MultiCell(190, 3, utf8_decode('El contenido del acta puede ser verificado en la siguiente liga: https://www.registrocivil.gob.mx/ActaMex/ConsultaFolio,jsp capturando el Identificador Electrónico que se encuentra en la parte superior derecha del acta, para su consulta en dispositivos móviles, descarga una aplicación para lectura del código QR.%'), 0, 'J', 0);
	
	$pdf->Output();

?>