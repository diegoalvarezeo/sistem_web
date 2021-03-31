<?php
require_once "../controlador/contratos.controller.php";
require_once "../modelo/contrato.modelo.php";
Class ajaxContrato {
	public function crearContrato(){
		$datosc = array(	
			
			             "ciudadresidencia"=>$this->ciudadresidencia,
						 "inicioc"=>$this->inicioc,
						 "nacionalidad"=>$this->nacionalidad,
						 "desempenado"=>$this->desempenado,
						 "ubicacione"=>$this->ubicacione,
						 "cargo"=>$this->cargo,
						 "finc"=>$this->finc,
                         "idcliente"=>$this->idcliente,
						 
						 

        );
		
						
					
		$respuesta = ControllerContratos::CrearContratos($datosc);
		echo $respuesta;
	}
    public function editarContrato(){
		$datosc = array(	
			
			            "id_contrato"=>$this->id_contrato,
			            "ciudadresidencia"=>$this->ciudadresidencia,
						"inicioc"=>$this->inicioc,
						"nacionalidad"=>$this->nacionalidad,
						"desempenado"=>$this->desempenado,
						"ubicacione"=>$this->ubicacione,
						"cargo"=>$this->cargo,
						"finc"=>$this->finc,
						"idcliente"=>$this->idcliente,
						
						
						
					);
		$respuesta = ControllerContratos::EditarContratos($datosc);
		echo $respuesta;
	}
	public function eliminarContrato(){
        /// hereeee
		$id_contrato = $this->id_contrato;
		$respuesta = ControllerContratos::EliminarContratos($id_contrato);
		echo $respuesta;
	}
}    
$tipoOperacion = $_POST["tipoOperacion"];
//aca tambien

if($tipoOperacion == "insertarContrato") {
	$crearNuevoContrato = new ajaxContrato();
	$crearNuevoContrato ->	ciudadresidencia   = $_POST["ciudadresidencia"];
	$crearNuevoContrato ->	inicioc  = $_POST["inicioc"];
	$crearNuevoContrato ->	nacionalidad     = $_POST["nacionalidad"];
	$crearNuevoContrato ->	desempenado  = $_POST["desempenado"];
	$crearNuevoContrato ->	ubicacione  = $_POST["ubicacione"];
	$crearNuevoContrato ->	cargo     = $_POST["cargo"];
	$crearNuevoContrato ->	finc  = $_POST["finc"];
    $crearNuevoContrato ->	idcliente  = $_POST["idcliente"];
    $crearNuevoContrato ->crearContrato();
}
if ($tipoOperacion == "editarContrato") {
	$editarContratoc = new ajaxContrato();
	$editarContratoc ->	id_contrato   = $_POST["id_contrato"];
	$editarContratoc ->	ciudadresidencia   = $_POST["ciudadresidencia"];
	$editarContratoc ->	inicioc  = $_POST["inicioc"];
	$editarContratoc ->	nacionalidad     = $_POST["nacionalidad"];
	$editarContratoc ->	desempenado  = $_POST["desempenado"];
	$editarContratoc ->	ubicacione  = $_POST["ubicacione"];
	$editarContratoc ->	cargo     = $_POST["cargo"];
	$editarContratoc ->	finc  = $_POST["finc"];
	$editarContratoc -> idcliente  = $_POST["idcliente"];
    $editarContratoc ->	editarContrato();
}
if($tipoOperacion == "eliminarContrato"){
    $eliminarcontrato = new ajaxContrato();
    $eliminarcontrato -> id_contrato = $_POST["id_contrato"];
    $eliminarcontrato -> eliminarContrato();
}
