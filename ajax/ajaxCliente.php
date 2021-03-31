<?php
require_once "../controlador/clientes.controller.php";
require_once "../modelo/cliente.modelo.php";
Class ajaxCliente {
	public function crearCliente(){
		$datos = array(	
			
			             "nombreemp"=>$this->nombreemp,
						 "rute"=>$this->rute,
						 "direccion"=>$this->direccion,
						 "profesion"=>$this->profesion,
						 "correo"=>$this->correo,
						 "telefono"=>$this->telefono,
						 "afp"=>$this->afp,
						 "sistemasalud"=>$this->sistemasalud,
						 "nsucursal"=>$this->nsucursal,
						 "contrasena"=>$this->contrasena,
						 "idrol"=>$this->idrol
					
						
					);
		$respuesta = ControllerClientes::CrearClientes($datos);
		echo $respuesta;
	}

	public function editarCliente(){
		$datos = array(	
			
			            "id"=>$this->id,
			            "nombreemp"=>$this->nombreemp,
						"rute"=>$this->rute,
						"direccion"=>$this->direccion,
						"profesion"=>$this->profesion,
						"correo"=>$this->correo,
						"telefono"=>$this->telefono,
						"afp"=>$this->afp,
						"sistemasalud"=>$this->sistemasalud,
						"nsucursal"=>$this->nsucursal,
						"contrasena"=>$this->contrasena,
						"idrol"=>$this->idrol,
						
					);
		$respuesta = ControllerClientes::EditarClientes($datos);
		echo $respuesta;
	}
	public function eliminarCliente(){
		$id_cliente = $this->id_cliente;
		$respuesta = ControllerClientes::EliminarClientes($id_cliente);
		echo $respuesta;
	}
}





$tipoOperacion = $_POST["tipoOperacion"];
//aca tambien

if($tipoOperacion == "insertarCliente") {
	$crearNuevoCliente = new ajaxCliente();
	$crearNuevoCliente ->	nombreemp   = $_POST["nombreemp"];
	$crearNuevoCliente ->	rute  = $_POST["rute"];
	$crearNuevoCliente ->	direccion     = $_POST["direccion"];
	$crearNuevoCliente ->	profesion  = $_POST["profesion"];
	$crearNuevoCliente ->	correo  = $_POST["correo"];
	$crearNuevoCliente ->	telefono     = $_POST["telefono"];
	$crearNuevoCliente ->	afp  = $_POST["afp"];
	$crearNuevoCliente ->	sistemasalud = $_POST["sistemasalud"];
	$crearNuevoCliente ->	nsucursal = $_POST["nsucursal"];
	$crearNuevoCliente ->	contrasena = $_POST["contrasena"];
	$crearNuevoCliente ->	idrol = $_POST["idrol"];


	$crearNuevoCliente ->crearCliente();
}
//aca

if ($tipoOperacion == "editarCliente") {
	$editarCliente = new ajaxCliente();
	$editarCliente ->	id   = $_POST["id"];
	$editarCliente ->	nombreemp   = $_POST["nombreemp"];
	$editarCliente ->	rute  = $_POST["rute"];
	$editarCliente ->	direccion     = $_POST["direccion"];
	$editarCliente ->	profesion  = $_POST["profesion"];
	$editarCliente ->	correo  = $_POST["correo"];
	$editarCliente ->	telefono    = $_POST["telefono"];
	$editarCliente ->	afp  = $_POST["afp"];
	$editarCliente ->	sistemasalud = $_POST["sistemasalud"];
	$editarCliente ->	nsucursal = $_POST["nsucursal"];
	$editarCliente ->	contrasena = $_POST["contrasena"];
	$editarCliente ->	idrol = $_POST["idrol"];
	
	
	$editarCliente ->	editarCliente();
}

if ($tipoOperacion == "eliminarCliente") {
	$eliminarCliente = new ajaxCliente();
	$eliminarCliente -> id_cliente = $_POST["id"];
	$eliminarCliente -> eliminarCliente();
}
?>