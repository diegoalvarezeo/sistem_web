<?php 

require('../extras/fpdf/fpdf.php');
$_POST["nombreemp"] = str_replace("_"," ",$_POST["nombreemp"]);
$_POST["nacionalidad"] = str_replace("_"," ",$_POST["nacionalidad"]);
$_POST["ubicacione"] = str_replace("_"," ",$_POST["ubicacione"]);
$_POST["profesion"] = str_replace("_"," ",$_POST["profesion"]);
$_POST["desempenado"] = str_replace("_"," ",$_POST["desempenado"]);
$_POST["cargo"] = str_replace("_"," ",$_POST["cargo"]);
$_POST["finc"] = str_replace("_"," ",$_POST["finc"]);

$nombreemp = $_POST["nombreemp"];
$rut = $_POST["rute"];
$nacionalidad = $_POST["nacionalidad"];
$ubicacione = $_POST["ubicacione"];
$profesion = $_POST["profesion"];
$desempenado = $_POST["desempenado"];

$cargo = $_POST["cargo"];

$fincontrato = $_POST["finc"];








class PDF extends FPDF
{
    function Header(){
        $this->AddLink();
        $this->Image('../extras/esaftr.png',13,5,40,0,'','');
        
        
    } 
    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().' de {nb}',0,0,'R');
    }


     
}
$fg= "svoish";
$pdf = new PDF();
$pdf->AddPage('P','letter',0);
$pdf->SetMargins(14,1,12);
$pdf->AliasNbPages();
$pdf->Ln(20);


$pdf->SetFont('HELVETICA','BI',18);

$pdf->Cell(0,5,'CONTRATO DE TRABAJO ',0,1,'C');//Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$pdf->Ln();
$pdf->SetX(15);
$pdf->Cell(0,15,'A PLAZO',0,1,'C');
$pdf->SetFont('HELVETICA','I',11);

$pdf->Cell(89,2,'En Rancagua a 20 de noviembre del 2020, entre la ',0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(0,2,'Empresa de Servicios Administrativos y Financieros',0,1,'L',0);
$pdf->Ln();
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(45,3,'Ltda., Rut 76.471.772-4, ',0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(73,3,'en  adelante "ESAF"  Representada  por, ',0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(70,3,utf8_decode('Don Rodrigo Alejandro Jerez Muñoz,  '),0,0,'L',0);

$pdf->SetFont('Arial','I',11);
$pdf->Ln(5);
$pdf->Cell(95,3,utf8_decode('Contador  Auditor/Magister en Economía  y  Finanzas '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,' Rut 8.933.818-2, ',0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(70,3,'ambos con domicilio en Avenida ',0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(94,3,utf8_decode('Bayona N°1870, San Pedro de la Paz, Concepción y'),0,0,'L',0);
 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(24,3,utf8_decode('Don(a)'.'  '.$nombreemp),0,0,'L',0);
$pdf->SetFont('Arial','I',11);

$pdf->Cell(70,3,utf8_decode('en '),0,0,'R',0);
$pdf->ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(21,3,utf8_decode('en adelante'),0,0,'L',0);

$pdf->SetFont('Arial','IB',11);
$pdf->Cell(68,3,utf8_decode('EL TRABAJADOR Rut:'.'  '.$rut),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(70,3,utf8_decode('de nacionalidad'.'  '.$nacionalidad.'  '.'de la ciudad de'.'  '.$ubicacione),0,0,'L',0);

$pdf->Ln(5);

$pdf->SetFont('Arial','Ib',11);


$pdf->Cell(108,3,('de profesion o actividad'.' '.utf8_decode($profesion)),0,0,'L',0);
$pdf->SetFont('Arial','Ib',11);



$pdf->SetFont('Arial','I',11);
$pdf->Cell(78,3,utf8_decode('acuerdan celebrar el siguiente contrato de trabajo:'),0,0,'R',0);


$pdf->Ln(13);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(70,3,utf8_decode('PRIMERO: (Domicilio del Contrato)  '),0,0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(59,3,utf8_decode('Mediante el presente Instrumento '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(12,3,utf8_decode('ESAF '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(43,3,utf8_decode('contrata los servicios de  '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode('EL TRABAJADOR '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(43,3,utf8_decode(', para desempeñarse  '),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(10,3,utf8_decode('en el '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(17,3,utf8_decode($desempenado),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(20,3,utf8_decode('ubicado en'),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
///////////falta aca
$pdf->Cell(92,3,utf8_decode('Calle Brasil N°912, de  la  ciudad de  Rancagua,'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(20,3,utf8_decode('en  el  cargo  o  función  de '),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode($cargo),0,0,'L',0);
$pdf->Ln(13);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode('SEGUNDO: (Duración del Contrato)  '),0,0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(21,3,utf8_decode('-	Será hasta el'.'  '.$fincontrato.'.'),0,0,'L',0);
$pdf->Ln(13);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode('TERCERO: (Condiciones del Contrato) '),0,0,'L',0);

$pdf->Ln(8);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(125,3,utf8_decode('a)	    ESAF debe proveer de un profesional para que preste servicios de  '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(50,3,utf8_decode('DIGITACION / ESTAFETA '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(120,3,utf8_decode('para '),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(9,3,utf8_decode(''),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(62,3,utf8_decode('que se desempeñe en labores en el '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(20,3,utf8_decode('"SERVIU" '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(62,3,utf8_decode('y brindar el apoyo que se requiera.'),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(120,3,utf8_decode('b)	    Los Servicios deberán ser efectuados, en horario de oficina de '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(20,3,utf8_decode('lunes a jueves de 8:00/8:30 a  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(9,3,utf8_decode(''),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);

$pdf->Cell(90,3,utf8_decode('17:00/17:30 y viernes de 8:00/8:30 a 16:00/16:30   '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(53,3,utf8_decode('horas en las dependencias del  '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(20,3,utf8_decode('"SERVIU" '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(35,3,utf8_decode('c)	    Se realizarán  '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(55,3,utf8_decode('Evaluaciones de desempeño  '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(53,3,utf8_decode('cada mes.  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('d)	    Se destinarán 45 minutos diarios de colación. '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(37,3,utf8_decode('e)	    En caso de que  '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode('EL PROFESIONAL '),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('no cumpla con la asistencia algún día, ésta será descontada, '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(9,3,utf8_decode(''),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('tomando como base de cálculo diario el valor mensual dividido por treinta.'),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('f)	     El incumplimiento del Servicio, sin autorización, ni aviso, pondrá término de inmediato al '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(9,3,utf8_decode(''),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('contrato'),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(56,3,utf8_decode('g)	    Será de responsabilidad de '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode('EL TRABAJADOR '),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('el cuidado, uso de equipos computacionales y  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(9,3,utf8_decode(''),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('otros elementos, que para el buen desempeño de sus funciones le sean asignados.'),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(43,3,utf8_decode('f)	     EL TRABAJADOR '),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('tendrá derecho a un aguinaldo de Navidad y Fiestas Patrias cada uno de '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(9,3,utf8_decode(''),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('$60.000 líquidos. '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(43,3,utf8_decode('i)  	   EL TRABAJADOR '),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(13,3,utf8_decode('tendrá '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(63,3,utf8_decode('derecho a 6 días Administrativos '),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('de permiso pagado cada 12 meses  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(9,3,utf8_decode(''),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('o el proporcional que corresponda de acuerdo con la duración del contrato. '),0,0,'L',0);
$pdf->AddPage('P','letter',0);
$pdf->Ln(28); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode('CUARTO: (Remuneración) '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(156,3,utf8_decode('Por la ejecución de las actividades, descritas en la  cláusula segunda de este instrumento, '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(13,3,utf8_decode('ESAF '),0,0,'L',0);
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(35,3,utf8_decode('cancelará '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11); 
$pdf->Cell(3,3,utf8_decode('a'),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode(' EL TRABAJADOR '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(79,3,utf8_decode(' por 30 días  trabajados, un total  haberes de '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode('$ 542.500 (Quinientos cuarenta y dos  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(40,3,utf8_decode('mil quinientos  pesos)   '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(120,3,utf8_decode(', (ello sin perjuicio de  los correspondientes descuentos legales, en la '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(40,3,utf8_decode('AFP Capital y  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(15,3,utf8_decode('Fonasa,  '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(119,3,utf8_decode(' que será  cancelado  los  días 5  de cada mes vencido  o  el día hábil siguiente y su detalle será la '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Ln(5); 
$pdf->Cell(119,3,utf8_decode('siguiente:'),0,0,'L',0);
$pdf->Ln(10); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(13,3,utf8_decode('ESAF  '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(102,3,utf8_decode('se compromete a remunerar al Trabajador con la suma de '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(15,3,utf8_decode('$ 334.000 (Trescientos treinta y cuatro  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(22,3,utf8_decode('mil pesos),  '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(100,3,utf8_decode('como sueldo base mensual,  adicionalmente a lo anterior se pagará mensualmente un bono de '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(49.7,3,utf8_decode('asistencia  y  puntualidad de  '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(49,3,utf8_decode('$10.000, (Diez mil pesos ) '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(50,3,utf8_decode('cada uno, ( montos que se tomarán como base de  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(97,3,utf8_decode('cálculo diario, cuyo  valor  mensual  se  dividirá  por  30),'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(50,3,utf8_decode('  más una gratificación mensual del 25% del sueldo'),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(35,3,utf8_decode('base, equivalente a   '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(89.7,3,utf8_decode('$ 88.500, (ochenta y ocho mil quinientos pesos) '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(35,3,utf8_decode('con tope de 4,75 ingresos mínimos   '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(97,3,utf8_decode('mensuales  se  agrega  una  asignación  de colación de '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(58.7,3,utf8_decode('$ 50.000 (cincuenta mil pesos'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(35,3,utf8_decode('y movilización de  '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(90,3,utf8_decode('$ 50.000 ( cincuenta mil pesos).'),0,0,'L',0);
$pdf->Ln(20); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode('QUINTO: (Derecho a Saber) '),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(12,3,utf8_decode('ESAF '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(18,3,utf8_decode('informa a '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode('EL TRABAJADOR'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(35,3,utf8_decode('que está cubierto,  siempre dentro de la vigencia del Contrato en caso'),0,0,'L',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(105.6,3,utf8_decode('de accidentes del trabajo  y enfermedades profesionales por '),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(81,3,utf8_decode('INSTITUTO DE SEGURIDAD DEL TRABAJO '),0,0,'L',0);

$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(52,3,utf8_decode('acuerdo con lo indicado en la' ),0,0,'L',0); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode('ley 16.744.'),0,0,'L',0);
$pdf->Ln(15); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(11,3,utf8_decode('ESAF '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(52,3,utf8_decode('se ha comprometido con la seguridad de sus trabajadores y mientras exista oficialmente la Pandemia ' ),0,0,'L',0); 
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(52,3,utf8_decode('Covid19, se compromete a proveer de elementos de protección personal. ' ),0,0,'L',0);
$pdf->Ln(20); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode('SEXTO: (Término Anticipado)  '),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(52,3,utf8_decode('Sin  perjuicio  de  lo estipulado en la cláusula segunda del presente contrato, cualquiera de las partes podrá ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(52,3,utf8_decode('poner  término  anticipado  a  este  Contrato  de Trabajo, de acuerdo a las normativas que indica la ley para  ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(96,3,utf8_decode('este  tipo  de  contrato,  esto  se  hará  por  la  parte  de ' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(33,3,utf8_decode('EL TRABAJADOR '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(86,3,utf8_decode(' dando aviso de tal decisión, a lo  ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(86,3,utf8_decode('menos con dos días de anticipación,  por medio de correo electrónico dirigido al Departamento de Recursos  ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(20,3,utf8_decode('Humanos a ' ),0,0,'L',0);
$pdf->SetFont('Arial','IU',11);
$pdf->SetTextColor(0,24,241);
$pdf->Cell(80,3,utf8_decode(' dpto.personal@esaf.cl / sergio.ayala@esaf.cl ' ),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(40.9,3,utf8_decode('mismo plazo que usará  ' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(12.8,3,utf8_decode('ESAF'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(27,3,utf8_decode('para informar a ' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(12,3,utf8_decode('EL'),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(12,3,utf8_decode('TRABAJADOR.'),0,0,'L',0);
$pdf->Ln(20); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode('SEPTIMO: (Confidencialidad)  '),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(35,3,utf8_decode('EL TRABAJADOR'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(27,3,utf8_decode('se  compromete  a  guardar  confidencialidad  de  la  información, de  los documentos y ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(27,3,utf8_decode('antecedentes  con  las  cuales  trabaja  directa  o indirectamente, así como cualquier otra información a que ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(27,3,utf8_decode('tuviere  acceso  en  la  ejecución  del presente contrato de trabajo, evitando su uso en beneficio propio o de ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(32,3,utf8_decode('terceros ajenos a ' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(13,3,utf8_decode('ESAF'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(8,3,utf8_decode('o al' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(34,3,utf8_decode('SERVIU.'),0,0,'L',0);
$pdf->AddPage('P','letter',0);
$pdf->Ln(27); 
$pdf->SetFont('Arial','I',11);
$pdf->Cell(54,3,utf8_decode('Igualmente será prohibido para ' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(33,3,utf8_decode('EL TRABAJADOR'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode(' enviar dicha información por cualquier medio a personas' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(40,3,utf8_decode('o  entidades  ajenas  a ' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(12,3,utf8_decode('ESAF'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(8,3,utf8_decode('o al' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(16,3,utf8_decode('SERVIU'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode('incluyendo  informes  de  actividades  respecto  al desarrollo de ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode('éstas. ' ),0,0,'L',0);
$pdf->Ln(20); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(54,3,utf8_decode('OCTAVO:  (Incumplimiento) '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode('El  incumplimiento  de  cualquiera  de  las  obligaciones  emanadas  de  este ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode('contrato dará origen a su terminación inmediata de acuerdo con la normativa legal.' ),0,0,'L',0);
$pdf->Ln(20); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(43.3,3,utf8_decode('NOVENO:  (Domicilio)  '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode('Las  partes fijan domicilio en la ciudad de Rancagua para todos los efectos legales ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode('de este contrato.' ),0,0,'L',0);
$pdf->Ln(20); 
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(44,3,utf8_decode('DECIMO:  (Ejemplares)  '),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(137,3,utf8_decode('El  presente  contrato  se suscribe en 2 ejemplares, quedando uno en poder de  ' ),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(21,3,utf8_decode('EL'),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(29,3,utf8_decode('TRABAJADOR'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode('(quien  declara  expresamente  recibir  su  ejemplar  a  entera  satisfacción) y uno en poder  ' ),0,0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(6,3,utf8_decode('de'),0,0,'L',0);
$pdf->SetFont('Arial','IB',11);
$pdf->Cell(10,3,utf8_decode('ESAF'),0,0,'L',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(55,3,utf8_decode(', en este acto. ' ),0,0,'L',0);
$pdf->Ln(38);
$pdf->Image('../extras/firma.jpg',20,140,90,0,'','');
$pdf->SetFont('Arial','I',11);
$pdf->Cell(110,4,utf8_decode(' ' ),0,0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(100,10,utf8_decode('' ),0,0,'R',0);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(12,5,utf8_decode('Don(a)'),'T',0,'L',0);
$pdf->Cell(55,5,utf8_decode($nombreemp ),'T',0,'L',0);


$pdf->Output();


?>