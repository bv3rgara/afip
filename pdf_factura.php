<?php
@session_start(); 
require('pdf/fpdf.php');
include("Afip.php");

// $servidor = "localhost"; 
// $usuario  = "admin";
// $password = "admin123";
// $base_de_datos = "afip";
// $conexion = mysql_connect ($servidor,$usuario,$password) or die ('Imposible conectarse con la BD.');
// 	if (! $conexion){echo "No se pudo conectar con el servidor MySQL";exit();}
// 	if (! mysql_select_db($base_de_datos)){echo "No se pudo conectar con la base de datos";exit();
// }
// $sql_obra = "SELECT id_obra_social, nombre FROM obra_social WHERE id_obra_social = '".$_SESSION['os']."'";  
// $query_obra = mysql_query($sql_obra,$conexion);  
// $obra = mysql_fetch_array($query_obra);

// $sql_f = "SELECT * FROM factura WHERE periodo = '".$_SESSION['periodo']."' AND id_os = '".$_SESSION['os']."' AND estado = 'L'";  
// $query_f = mysql_query($sql_f,$conexion);
// $fila_f = mysql_fetch_array($query_f);

// $periodo = explode("-", $_SESSION['periodo']);

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->Image('imagenes/separador.jpg' ,10 ,52 ,190 ,1 ,'jpg');

$pdf->SetFont('Arial','',9);
$pdf->Cell(0,10,"Hoja: ".$pdf->PageNo().'/{nb}'."  -  Fecha: ".date('d/m/Y'),0,0,'R');
$pdf->Ln(10);

$pdf->SetTextColor(49, 164, 101);
$pdf->SetFont('Arial','B',17);
$pdf->Cell(40,10,'COLEGIO MEDICO DE CORRIENTES');
$pdf->Ln(5);

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(40,10,'CARLOS PELLEGRINI 1787 - (3400) - CORRIENTES');
$pdf->Ln(5);
$pdf->Cell(40,10,'Teléfono: (0379) 4427421');
$pdf->Ln(5);
$pdf->Cell(40,10,'Obra Social: () - ');
$pdf->Ln(5);
$pdf->Cell(40,10,'Facturación correspondiente a: / ');
$pdf->Ln(5);
$pdf->Cell(40,10,'Número de Factura: ');
$pdf->Ln(20);

$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(49, 164, 101);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(18,7,"Matrícula",1,0,'C','TRUE');
$pdf->Cell(38,7,"Kinesiólogo",1,0,'C','TRUE');
$pdf->Cell(19,7,"Servicio",1,0,'C','TRUE');
$pdf->Cell(45,7,"Instituto",1,0,'C','TRUE');
$pdf->Cell(19,7,"Fecha",1,0,'C','TRUE');
$pdf->Cell(21,7,"Honorarios",1,0,'C','TRUE');
$pdf->Cell(14,7,"Sesión",1,0,'C','TRUE');
$pdf->Cell(16,7,"Total",1,0,'C','TRUE');
$pdf->Ln(7);

$pdf->SetTextColor(55,55,55);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','',9);


$afip = new Afip(array('CUIT' => 20056602349));
$last_voucher = $afip->ElectronicBilling->GetLastVoucher(1,6); //Devuelve el número del último comprobante creado para el punto de venta 1 y el tipo de comprobante 6 (Factura B)
$pdf->Cell(16,7,"$last_voucher",1,0,'C','TRUE');

// $sql = "SELECT * FROM detalle_factura WHERE periodo = '".$_SESSION['periodo']."' AND id_os = '".$_SESSION['os']."' AND estado = 'L' ORDER BY id_kinesiologo ASC";   
// $query = mysql_query($sql,$conexion);
// $nro = mysql_affected_rows();
// $total = 0;
// $subtotal = 0;
// $socio = "";
// $x = 0;
// while ($fila = mysql_fetch_array($query)) {	
// 	$sql_k = "SELECT matricula, ayn, id_kinesiologo FROM kinesiologo WHERE id_kinesiologo = '".$fila['id_kinesiologo']."'";  
// 	$query_k = mysql_query($sql_k,$conexion);  
// 	$kinesiologo = mysql_fetch_array($query_k);

// 	$sql_os = "SELECT nombre FROM obra_social WHERE id_obra_social = '".$fila['id_os']."'";  
// 	$query_os = mysql_query($sql_os,$conexion);  
// 	$os = mysql_fetch_array($query_os);	
// 	$total = $total + $fila['total'];

// 	$sql_i = "SELECT nombre FROM instituto WHERE id_instituto = '".$fila['id_instituto']."' AND estado = 'A'";  
// 	$query_i = mysql_query($sql_i,$conexion);
// 	$inst = mysql_fetch_array($query_i);
// 	if ($inst[0]) {
// 		$insti = $inst[0];
// 	}else{
// 		$insti = "X";
// 	}
// 	if ($fila['tipo'] == 'D') {
// 		$tipo = "Domiciliario";
// 	} elseif ($fila['tipo'] == 'I') {
// 		$tipo = "Internado";
// 	}
// 	// verifica si sigue siendo el mismo kinesiologo
// 	if ($socio == $kinesiologo[2]) {
// 		$subtotal = $subtotal + $fila['total'];
// 		$pdf->Cell(18,5, $kinesiologo[0],1,0,'C','TRUE');
// 		$pdf->Cell(38,5, $kinesiologo[1],1,0,'C','TRUE');
// 		$pdf->Cell(19,5, $tipo,1,0,'C','TRUE');
// 		$pdf->Cell(45,5, $insti,1,0,'C','TRUE');
// 		$pdf->Cell(19,5, $fila['fecha'],1,0,'C','TRUE');
// 		$pdf->Cell(21,5, "$ ".$fila['honorario'],1,0,'C','TRUE');
// 		$pdf->Cell(14,5, $fila['sesion'],1,0,'C','TRUE');
// 		$pdf->Cell(16,5, "$ ".$fila['total'],1,0,'C','TRUE');
// 		$pdf->Ln(5);
// 	}else{
// 		if ($x == 0) {
			
// 		}else{
// 			$pdf->SetFillColor(238,250,246);
// 			$pdf->SetFont('Arial','B',10);
// 			$pdf->Cell(139,6,"",0,0,'R');
// 			$pdf->Cell(51,6,"Sub-Total:   $".number_format($subtotal, 2,',', '.'),1,0,'C','TRUE');
// 			$pdf->Ln(10);
// 		}
// 		$pdf->SetFillColor(255,255,255);	
// 		$pdf->SetFont('Arial','',9);
// 		$subtotal = 0;
// 		$socio = $kinesiologo[2];
// 		$subtotal = $subtotal + $fila['total'];
// 		$pdf->Cell(18,5, $kinesiologo[0],1,0,'C','TRUE');
// 		$pdf->Cell(38,5, $kinesiologo[1],1,0,'C','TRUE');
// 		$pdf->Cell(19,5, $tipo,1,0,'C','TRUE');
// 		$pdf->Cell(45,5, $insti,1,0,'C','TRUE');
// 		$pdf->Cell(19,5, $fila['fecha'],1,0,'C','TRUE');
// 		$pdf->Cell(21,5, "$ ".$fila['honorario'],1,0,'C','TRUE');
// 		$pdf->Cell(14,5, $fila['sesion'],1,0,'C','TRUE');
// 		$pdf->Cell(16,5, "$ ".$fila['total'],1,0,'C','TRUE');
// 		$pdf->Ln(5);
// 	}
// 	$x = 1;
// }
// $pdf->SetFillColor(238,250,246);
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(139,6,"",0,0,'R');
// $pdf->Cell(51,6,"Sub-Total:   $".number_format($subtotal, 2,',', '.'),1,0,'C','TRUE');
// $pdf->Ln(10);
// $pdf->SetFont('Arial','B',10);
// $pdf->SetFillColor(107,142,35);
// $pdf->SetTextColor(255,255,255);
// $pdf->Cell(139,7,1,0,'R','TRUE');
// $pdf->Cell(51,7,"Total:   $".number_format($total, 2,',', '.'),1,0,'C','TRUE');

$pdf->Output();
?>