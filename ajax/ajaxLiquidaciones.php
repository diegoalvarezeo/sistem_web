<?php
require_once "../controlador/liquidaciones.controller.php";
require_once "../modelo/liquidacion.modelo.php";
Class ajaxLiquidaciones {
	public function crearLiquidacion(){
		$datosl = array(	
			
			             "anio"=>$this->anio,
						 "mes"=>$this->mes,
                         "diast"=>$this->diast,
						 "sueldob"=>$this->sueldob,
						 "aguinaldo"=>$this->aguinaldo,
						 "bonoa"=>$this->bonoa,
						 "bonop"=>$this->bonop,
                         "gratificacion"=>$this->gratificacion,
						 "colacion"=>$this->colacion,
                         "movilizacion"=>$this->movilizacion,
                         "utilesa"=>$this->utilesa,
                         "asigf"=>$this->asigf,
                         "descafpmodelo"=>$this->descafpmodelo,
                         "descfonasa"=>$this->descfonasa,
                         "impuestou"=>$this->impuestou,
                         "seguros"=>$this->seguros,
                         "fecha"=>$this->fecha,
                         "id_cliente"=>$this->id_cliente,
						 
						 

        );
		
						
					
		$respuesta = ControllerLiquidaciones::CrearLiquidaciones($datosl);
		echo $respuesta;
	}
    public function editarLiquidacion(){
		$datosl = array(	
			//aca tambien
            "id_liquidacion"=>$this->id_liquidacion,
            "anio"=>$this->anio,
            "mes"=>$this->mes,
            "diast"=>$this->diast,
            "sueldob"=>$this->sueldob,
            "aguinaldo"=>$this->aguinaldo,
            "bonoa"=>$this->bonoa,
            "bonop"=>$this->bonop,
            "gratificacion"=>$this->gratificacion,
            "colacion"=>$this->colacion,
            "movilizacion"=>$this->movilizacion,
            "utilesa"=>$this->utilesa,
            "asigf"=>$this->asigf,
            "descafpmodelo"=>$this->descafpmodelo,
            "descfonasa"=>$this->descfonasa,
            "impuestou"=>$this->impuestou,
            "seguros"=>$this->seguros,
            "fecha"=>$this->fecha,
            "id_cliente"=>$this->id_cliente,
						);
		$respuesta = ControllerLiquidaciones::EditarLiquidaciones($datosl);
		echo $respuesta;
	}
	public function eliminarLiquidacion(){
        /// hereeee
		$id_liqui = $this->id_liquidacion;
		$respuesta = ControllerLiquidaciones::EliminarLiquidaciones($id_liqui);
		echo $respuesta;
	}
}    
$tipoOperacion = $_POST["tipoOperacion"];
//aca tambien

if($tipoOperacion == "insertarLiquidacion") {
	$crearNuevaLiquidacion = new ajaxLiquidaciones();
	$crearNuevaLiquidacion ->	anio  = $_POST["anio"];
	$crearNuevaLiquidacion ->	mes  = $_POST["mes"];
	$crearNuevaLiquidacion ->	diast = $_POST["diast"];
	$crearNuevaLiquidacion ->	sueldob = $_POST["sueldob"];
	$crearNuevaLiquidacion ->	aguinaldo = $_POST["aguinaldo"];
	$crearNuevaLiquidacion ->	bonoa = $_POST["bonoa"];
	$crearNuevaLiquidacion ->	bonop = $_POST["bonop"];
    $crearNuevaLiquidacion ->	gratificacion = $_POST["gratificacion"];
    $crearNuevaLiquidacion ->	colacion = $_POST["colacion"];
    $crearNuevaLiquidacion ->	movilizacion = $_POST["movilizacion"];
    $crearNuevaLiquidacion ->	utilesa = $_POST["utilesa"];
    $crearNuevaLiquidacion ->	asigf = $_POST["asigf"];
    $crearNuevaLiquidacion ->	descafpmodelo = $_POST["descafpmodelo"];
    $crearNuevaLiquidacion ->	descfonasa = $_POST["descfonasa"];
    $crearNuevaLiquidacion ->	impuestou = $_POST["impuestou"];
    $crearNuevaLiquidacion ->	seguros = $_POST["seguros"];
    $crearNuevaLiquidacion ->	fecha = $_POST["fecha"];
    $crearNuevaLiquidacion ->	id_cliente = $_POST["id_cliente"];
    $crearNuevaLiquidacion ->crearLiquidacion();
}
if($tipoOperacion == "editarLiquidacion"){
    $editarLiquidacionl = new ajaxLiquidaciones();
    $editarLiquidacionl -> id_liquidacion = $_POST["id_liquidacion"];
    $editarLiquidacionl -> anio = $_POST["anio"];
    $editarLiquidacionl -> mes = $_POST["mes"];
    $editarLiquidacionl -> diast = $_POST["diast"];
    $editarLiquidacionl -> sueldob = $_POST["sueldob"];
    $editarLiquidacionl -> aguinaldo = $_POST["aguinaldo"];
    $editarLiquidacionl -> bonoa = $_POST["bonoa"];
    $editarLiquidacionl -> bonop = $_POST["bonop"];
    $editarLiquidacionl -> gratificacion = $_POST["gratificacion"];
    $editarLiquidacionl -> colacion = $_POST["colacion"];
    $editarLiquidacionl -> movilizacion = $_POST["movilizacion"];
    $editarLiquidacionl -> utilesa = $_POST["utilesa"];
    $editarLiquidacionl -> asigf = $_POST["asigf"];
    $editarLiquidacionl -> descafpmodelo = $_POST["descafpmodelo"];
    $editarLiquidacionl -> descfonasa = $_POST["descfonasa"];
    $editarLiquidacionl -> impuestou = $_POST["impuestou"];
    $editarLiquidacionl -> seguros = $_POST["seguros"];
    $editarLiquidacionl -> fecha = $_POST["fecha"];
    $editarLiquidacionl -> id_cliente = $_POST["id_cliente"];
    $editarLiquidacionl -> editarLiquidacion();

}
if($tipoOperacion == "eliminarLiquidacion"){
    $eliminarliquidacion = new ajaxLiquidaciones();
    $eliminarliquidacion -> id_liquidacion = $_POST["id_liquidacion"];
    $eliminarliquidacion -> eliminarLiquidacion();
}