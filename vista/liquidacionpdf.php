
<?php 

require('../extras/fpdf/fpdf.php');


////////////////77



$numsucursal= $_POST["nsucursal"];
$mes = $_POST["mes"];
$anio = $_POST["anio"];






$nombreemp = $_POST["nombreemp"];
$_POST["nombreemp"] = str_replace("_"," ",$nombreemp);

$rut = $_POST["rute"];
$afp = $_POST["afp"];
$sistemasalud = $_POST["sistemasalud"];
$diastrabaja = $_POST["diast"];
$sueldob = number_format($_POST["sueldob"],0,"",".");
    
$bonoasis = number_format($_POST["bonoa"],0,"",".");
$bonop = number_format($_POST["bonop"],0,"",".");
$gratificacion = number_format($_POST["gratificacion"],0,"",".");
$colacion = number_format($_POST["colacion"],0,"",".");
$movilizacion = number_format($_POST["movilizacion"],0,"",".");
$utilesa = number_format($_POST["utilesa"],0,"",".");
$asigf = number_format($_POST["asigf"],0,"",".");
$descafpmodelo = number_format($_POST["descafpmodelo"],0,"",".");
$descfonasa = number_format($_POST["descfonasa"],0,"",".");
$impuestou = number_format($_POST["impuestou"],0,"",".");
$seguros = number_format($_POST["seguros"],0,"",".");
$fecha = $_POST["fecha"];
$aguinaldo = number_format($_POST["aguinaldo"],0,"",".");

$totalimponiblenum = number_format(($_POST["sueldob"] + $_POST["bonoa"]+ $_POST["bonop"] + $_POST["gratificacion"]+$_POST["aguinaldo"]),0,"",".");
//calculo
$totalimponible = ($_POST["sueldob"] + $_POST["bonoa"]+ $_POST["bonop"] + $_POST["gratificacion"]+$_POST["aguinaldo"]);

$totalnoimponiblenum = number_format(($_POST["colacion"] + $_POST["movilizacion"] + $_POST["utilesa"] + $_POST["asigf"]),0,"",".");
$totalnoimponible = ($_POST["colacion"] + $_POST["movilizacion"] + $_POST["utilesa"] + $_POST["asigf"]);


$totaltotalnum = number_format(($totalimponible+$totalnoimponible),0,"",".");
$totaltotal = ($totalimponible+$totalnoimponible);

$totaldescuentosnum = number_format(($_POST["descafpmodelo"]+$_POST["descfonasa"]+$_POST["impuestou"]+$_POST["seguros"]),0,"",".");
$totaldescuentos = ($_POST["descafpmodelo"]+$_POST["descfonasa"]+$_POST["impuestou"]+$_POST["seguros"]);

$alcanceliquidonum = number_format(($totaltotal-$totaldescuentos),0,"",".");
$alcanceliquido = ($totaltotal-$totaldescuentos);














class PDF extends FPDF
{
    function Header(){
        $this->AddLink();
        $this->Image('../extras/logo_esaf.jpg',10,15,40,0,'','');
        
        
    } 
    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        
    }


     
}
$pdf = new PDF();
$pdf->AddPage('P','letter',0);
$pdf->SetFont('Arial','IB',10);
$pdf->ln(10);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(60,3,'',0,0,'L',0);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(80,3,utf8_decode('LIQUIDACION DE REMUNERACION MENSUAL' ),0,0,'C',0);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(20,3,$numsucursal,0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->ln(10);
$pdf->SetLineWidth(7);
$pdf->ln(1);
$pdf->SetLineWidth(0.7);

$pdf->SetFont('Arial','I',10);

$pdf->Cell(120,3,utf8_decode('MES:' ),0,0,'R',0);
$pdf->SetLineWidth(0.7);

$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,$mes.'     '.$anio,0,0,'L',0);
//valor del mes
$pdf->ln(7);
$pdf->SetFont('Arial','I',10);

$pdf->Cell(40,3,utf8_decode('RAZON SOCIAL' ),0,0,'L',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(5,3,utf8_decode(':' ),0,0,'L',0);
$pdf->Line(10,35,200,35);

$pdf->Line(10,36,200,36);
$pdf->SetFont('Arial','IB',10);

$pdf->Cell(0,3,utf8_decode('EMP DE SERVICIOS ADMINISTRATIVOS Y FINANCIEROS LTDA' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode('RUT' ),0,0,'L',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(5,3,utf8_decode(':' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode('76471772-4' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,"",0,0,'L',0);
$pdf->Line(10,49,200,49);
$pdf->Ln(8);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,'NOMBRE' ,0,0,'L',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(5,3,utf8_decode(':' ),0,0,'L',0);



$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,$_POST["nombreemp"],0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,'',0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode('RUT' ),0,0,'L',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(5,3,utf8_decode(':' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(45,3,$rut,0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode('AFP' ),0,0,'L',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(5,3,utf8_decode(':' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($afp),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode('SIST. SALUD' ),0,0,'L',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(5,3,utf8_decode(':' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($sistemasalud),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode('DIAS TRABAJADOS' ),0,0,'L',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(5,3,utf8_decode(':' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($diastrabaja),0,0,'L',0);
/////////
$pdf->Line(10,76,200,76);
$pdf->Ln(10);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(50,3,utf8_decode('HABERES' ),0,0,'L',0);
$pdf->Ln(7);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('SUELDO BASE' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($sueldob),0,0,'R',0);
$pdf->ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('BONO ASISTENCIA' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($bonoasis),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('BONO PUNTUALIDAD' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($bonop),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('GRATIFICACION' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($gratificacion),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('AGUINALDO' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($aguinaldo),0,0,'R',0);

$pdf->Ln(7);

///////////////
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(50,3,utf8_decode('TOTAL IMPONIBLE' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($totalimponiblenum),0,0,'R',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode($totalimponiblenum),0,0,'R',0);

$pdf->Ln(7);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('COLACION                      ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($colacion),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('MOVILIZACION                              ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($movilizacion),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('UTILES DE ASEO ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($utilesa),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('ASIG. FAMILIAR              ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($asigf),0,0,'R',0);


$pdf->Ln(5);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(50,3,utf8_decode('TOTAL NO IMPONIBLE' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($totalnoimponiblenum),0,0,'R',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode($totalnoimponiblenum),0,0,'R',0);
$pdf->Ln(7);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(50,3,utf8_decode('TOTAL HABERES' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90,3,utf8_decode($totaltotalnum),0,0,'R',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('DESCUENTOS' ),0,0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('A.F.P  MODELO 10.77%                 ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($descafpmodelo ),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('FONASA                             ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($descfonasa),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('IMPUESTO UNICO ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($impuestou),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('SEGURO CESANTIA    0.60%         ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($seguros),0,0,'R',0);

$pdf->Ln(10);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('TOTAL DESCUENTOS' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode($totaldescuentosnum),0,0,'R',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(40,3,utf8_decode($totaldescuentosnum),0,0,'R',0);
$pdf->Line(10,202,200,202);
$pdf->Ln(11);
$pdf->SetFont('Arial','I',10); 
$pdf->Cell(50,3,utf8_decode('LIQUIDO A PAGAR' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(2,3,utf8_decode(' ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10); 
$pdf->Cell(50,3,utf8_decode(' ALCANCE LIQUIDO' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10); 
$pdf->Cell(38,3,utf8_decode($alcanceliquidonum),0,0,'R',0);




$pdf->Ln(5);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(52,3,utf8_decode(' ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode(' ANTICIPO' ),0,0,'L',0);
         

$pdf->Ln(5);
$pdf->SetFont('Arial','IB',10);
$pdf->Cell(53,3,utf8_decode(' ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode('LIQUIDO A PAGAR' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10); 
$pdf->Cell(37,3,utf8_decode($alcanceliquidonum),0,0,'R',0);
$pdf->Line(10,220,200,220);
$pdf->Line(10,221,200,221);
$pdf->Ln(15);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(44,3,utf8_decode('Certifico que he recibido de ' ),0,0,'L',0);


$pdf->SetFont('Arial','IB',10);
$pdf->Cell(98,3,utf8_decode('Empresa de Servicios Administrativos y Financieros Ltda.' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(50,3,utf8_decode(' A mi entera satisfacción el' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Ln(5);
$pdf->Cell(50,3,utf8_decode('saldo indicado en la liquidacion y no tengo ni cargo ni cobro alguno posteriores que hacer.' ),0,0,'L',0);
$pdf->Ln(5);

$pdf->Ln(15);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(35,3,utf8_decode('' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(15,3,utf8_decode('FECHA:' ),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(65,3,utf8_decode($fecha),0,0,'L',0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(30,3,utf8_decode('FIRMA DEL TRABAJADOR' ),0,0,'L',0);

$pdf->Output();
?>
