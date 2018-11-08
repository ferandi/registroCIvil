<?php

	require 'fpdf/fpdf.php';

	$pdf = new FPDF();
	$pdf->AddPage();
	
	$pdf->SetXY(10, 30);
	$pdf->SetFont('Arial','B', 20);
	$pdf->MultiCell(100, 15, 'Estados Unidos Mexicanos Acta de Nacimiento', 0, 'C', 0);
	
	$pdf->SetXY(135,15);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(65, 4, utf8_decode('Identificador Electrónico'), 0, 1, 'C');
	
	$pdf->SetX(135);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(65, 4, 'XXXXXXXXXXXXXXXXXX', 0, 1, 'C');
	
	$pdf->SetX(135);
	$pdf->Cell(65, 4, 'XXXXXXXXXXXXX', 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 9);
	$pdf->SetFillColor(150, 150, 150);
	$pdf->Cell(80, 5, utf8_decode('Clave Única de Registro de Población '), 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(45, 5, 'XXXXXXXXXXXXXXXXXX', 0, 0, 'L');
	$pdf->Cell(35, 5, 'XXXXXXXXXXXXX', 0, 1, 'R');
	
	$pdf->SetX(120);
	$pdf->Cell(45, 5, 'XXXXXXXXXXXXXXXXXX', 0, 0, 'L');
	$pdf->Cell(35, 5, 'XXXXXXXXXXXXX', 0, 1, 'R');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 9);
	$pdf->Cell(80, 5, utf8_decode('Número de Certificado de Nacimiento'), 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(80, 5, utf8_decode('XXXXXXXX'), 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(80, 5, 'Entidad de Registro', 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(80, 5, utf8_decode('XXXXXXXX'), 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 10);
	$pdf->Cell(80, 5, utf8_decode('Municipio de Registro'), 0, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 10);
	$pdf->Cell(80, 5, utf8_decode('XXXXXXXX'), 0, 1, 'C');
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','', 6.5);
	$pdf->Cell(20, 5, utf8_decode('Oficialía'), 1, 0, 'C', true);
	$pdf->Cell(21, 5, 'Fecha de Registro', 1, 0, 'C', true);
	$pdf->Cell(19, 5, 'Libro', 1, 0, 'C', true);
	$pdf->Cell(20, 5, utf8_decode('Número de Acta'), 1, 1, 'C', true);
	
	$pdf->SetX(120);
	$pdf->SetFont('Arial','B', 8);
	$pdf->Cell(20, 5, 'XXXX', 1, 0, 'C');
	$pdf->Cell(21, 5, 'XX/XX/XXXX', 1, 0, 'C');
	$pdf->Cell(19, 5, 'X', 1, 0, 'C');
	$pdf->Cell(20, 5, 'XXXXX', 1, 1, 'C');
	
	$pdf->SetY(86);
	$pdf->SetFont('Arial','', 12);
	$pdf->Cell(190, 8, 'Datos de la Persona Registrada', 0, 1, 'C', true);
	
	$pdf->SetXY(10, 95);
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(67, 11, utf8_decode('XXXXX'), 'TBL', 0, 'C');
	$pdf->Cell(61, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(62, 11, utf8_decode('XXXXX'), 'TBR', 1, 'C');
	
	$pdf->SetX(10);
	$pdf->SetFont('Arial', '', 14);
	$pdf->Cell(67, 11, 'Nombre(s):', 'TL', 0, 'C');
	$pdf->Cell(61, 11, 'Primer Apellido:', 'T', 0, 'C');
	$pdf->Cell(62, 11, 'Segundo Apellido:', 'TR', 1, 'C');
	
	$pdf->SetX(10);
	$pdf->SetFont('Arial', '', 14);
	$pdf->Cell(67, 11, utf8_decode('XXXXX'), 'BL', 0, 'C');
	$pdf->Cell(61, 11, utf8_decode('XXXXX'), 'B', 0, 'C');
	$pdf->Cell(62, 11, utf8_decode('XXXXX'), 'BR', 0, 'C');
	$pdf->Cell(0, 11, utf8_decode(''), 'B', 1, 'C');
	
	$pdf->SetX(10);
	$pdf->SetFont('Arial', '', 14);
	$pdf->Cell(67, 9, 'Sexo:', 'LB', 0, 'C');
	$pdf->Cell(61, 9, 'Fecha de Nacimiento:', 'B', 0, 'C');
	$pdf->Cell(62, 9, 'Lugar de Nacimiento:', 'BR', 0, 'C');
	

	$pdf->SetXY(10, 140);
	$pdf->SetFont('Arial','', 12);
	$pdf->Cell(190, 8, utf8_decode('Datos de Filiación de la Persona Registrada'), 0, 1, 'C', true);
	
	$pdf->SetXY(10, 149);
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(36, 11, utf8_decode('XXXXX'), 'TBL', 0, 'C');
	$pdf->Cell(40, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(40, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(41, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(33, 11, utf8_decode('XXXXX'), 'TBR', 1, 'C');
	
	$pdf->SetX(10);
	$pdf->SetFont('Arial', '', 12);
	$pdf->Cell(36, 11, 'Nombre(s):', 'TL', 0, 'C');
	$pdf->Cell(40, 11, 'Primer Apellido:', 'T', 0, 'C');
	$pdf->Cell(40, 11, 'Segundo Apellido:', 'T', 0, 'C');
	$pdf->Cell(41, 11, 'Nacionalidad:', 'T', 0, 'C');
	$pdf->Cell(33, 11, 'CURP:', 'TR', 1, 'C');
	
    $pdf->SetX(10);
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(36, 11, utf8_decode('XXXXX'), 'TBL', 0, 'C');
	$pdf->Cell(40, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(40, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(41, 11, utf8_decode('XXXXX'), 'TB', 0, 'C');
	$pdf->Cell(33, 11, utf8_decode('XXXXX'), 'TBR', 1, 'C');
	
	$pdf->SetX(10);
	$pdf->SetFont('Arial', '', 12);
	$pdf->Cell(36, 11, 'Nombre(s):', 'TBL', 0, 'C');
	$pdf->Cell(40, 11, 'Primer Apellido:', 'TB', 0, 'C');
	$pdf->Cell(40, 11, 'Segundo Apellido:', 'TB', 0, 'C');
	$pdf->Cell(41, 11, 'Nacionalidad:', 'TB', 0, 'C');
	$pdf->Cell(33, 11, 'CURP:', 'TRB', 1, 'C');
	
	$pdf->SetY(198);
	$pdf->Cell(95, 9, 'Anotaciones Marginales:', 1, 0, 'C', true);
	$pdf->Cell(95, 9, utf8_decode('Certificación:'), 1, 1, 'C', true);
	
	$pdf->SetFont('Arial','', 5);
	$pdf->MultiCell(95, 3, 'ENTREGO PARA EL APENDICE DEL REGISTRO DE MATRIMONIO: ORIGINAL DE LA CONSTANCIA DE INEXISTENCIA DE MATRIMONIO CON FOLIO N° 091929 Y DE LOS CERTIFICADOS DE MEDICOS PRE-NUPCIALES CON FOLIO NUMERO EL: 14372 ELLA: 14371 Y COPIAS SIMPLES DEL ACTA DE NACIMIENTO, CURP Y CREDENCIAL DE ELECTOR IFE DE LOS CONTRAYENTES Y DE LA CREDENCIAL DE ELECTOR IFE DE LOS CUATRO TESTIGOS.', 'LR', 'J', 0);
	
	$pdf->SetXY(105, 207);
	$pdf->SetFont('Arial','', 6);
	$pdf->MultiCell(95, 3, utf8_decode('Se extiende la presente copia certificada, con fundamento en los artículos 618 fracción IV, 634 y 635 del Código Civil de Quintana Roo; 7 fracciones XII, XXVII y XXIX del Reglamento del Registro Civil de Quintana Roo; y 26, fracciones XII, XIX y XXVII del Reglamento Interior de la Secretaría de Gobierno Registro Civil. La Firma Electrónica con la que cuenta es vigente a la fecha de expedición; tiene validez jurídica y probatoria de acuerdo a las disposiciones legales en la materia.'), 'R', 'J', 0);
	
	$pdf->SetY(217);
	$pdf->MultiCell(95, 18, '', 'LRB', 'L', 0);
	$pdf->SetXY(105, 222);
	$pdf->MultiCell(95, 5, '', 'R', 'L', 0);
	$pdf->SetXY(105, 227);
	$pdf->SetFont('Arial','', 10);
	$pdf->MultiCell(95, 4, utf8_decode('A LOS 06 DÍAS DEL MES DE NOVIEMBRE DE 2018. DOY FE.'), 'RBT', 'L', 0);
	
	$pdf->setY(236);
	$pdf->Cell(36, 36, '', 1, 0, 'C');
	$pdf->Cell(20, 15, '', 0, 0, 'C');
	$pdf->SetFont('Arial', '', 15);
	$pdf->Cell(130, 8, utf8_decode('Firma Electrónica:'), 0, 1, 'C');
	
	$pdf->SetFont('Arial', '', 7);
	$pdf->SetX(90);
	$pdf->MultiCell(90, 2.5, 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 0, 'J', 0);
	
	$pdf->SetXY(60, 256);
	$pdf->SetFont('Arial', '', 6);
	$pdf->Cell(20, 5, utf8_decode('Código de verificación'), 0,1, 'C');
	
	$pdf->SetX(60);
	$pdf->SetFont('Arial', 'B', 7);
	$pdf->Cell(20, 3, 'XXXXXXXXXXXXXXXXXX', 0, 1, 'C');
	
	$pdf->SetX(60);
	$pdf->Cell(20, 3, 'XXXXXXXXXXXXXXXXXX', 0, 1, 'C');
	
	
	$pdf->SetXY(81, 253);
	$pdf->Cell(93, 10, 'X', 0, 1, 'C');
	
	$pdf->SetX(81);
	$pdf->SetFont('Arial', '', 8);
	$pdf->Cell(93, 4, utf8_decode('Engargada de la dirección General y Oficialía Central del'), 0, 1, 'R');
	
	$pdf->SetX(81);
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(93, 4, utf8_decode('XXXXXXXXXXXXXXXXXXXXXXXXXX'), 0, 1, 'R');

	$pdf->SetXY(175, 251);
	$pdf->SetFont('Arial', '', 6);
	$pdf->Cell(14, 5, utf8_decode('Código QR'), 0, 1, 'C');
	
	$pdf->SetX(175);
	$pdf->Cell(14, 14, '', 1, 1, 'C');
	
	$pdf->SetY(272.5);
	$pdf->SetFont('Arial', '', 6);
	$pdf->MultiCell(190, 2, utf8_decode('El contenido del acta puede ser verificado en la siguiente liga: https://www.registrocivil.gob.mx/ActaMex/ConsultaFolio,jsp capturando el Identificador Electrónico que se encuentra en la parte superior derecha del acta, para su consulta en dispositivos móviles, descarga una aplicación para lectura del código QR.%'), 0, 'J', 0);
	
	$pdf->Output();

?>