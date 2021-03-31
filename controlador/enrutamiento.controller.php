<?php
class ControllerEnrutamiento {
	public function enrutamiento() {
		$ruta = $_GET["ruta"];
		if (
		$ruta == "clientes"  ||
		$ruta == "login" || 
		$ruta == "panel" || 
		$ruta == "login" ||
		$ruta == "terrestresyotros" || 
		$ruta == "tipotrabajos" ||
		$ruta == "maritimos" ||
		$ruta == "cobro" || 
		$ruta == "productos" || 
		$ruta == "busqueda" || 
		$ruta == "archivos" || 
		$ruta == "variables" || 
		$ruta == "CrearExcel" || 
		$ruta == "pdf" || 
		$ruta == "servicios"||
		$ruta == "documentos"||
		$ruta == "contratos"||
		$ruta == "liquidaciones"||
		$ruta == "liquidacionpdf"
		) {
		include "vista/".$ruta.".php";
		} else{
		include "vista/panel.php";
	}
	}
}
