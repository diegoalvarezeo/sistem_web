<?php
Class ControllerClientes{
    public static function listarClientes(){
        $tabla = "clientes";
        $respuesta = ModeloClientes::listarCliente($tabla);
        return $respuesta;
    }

    public static function listarClientesYRut($id){
        $tabla = "clientes";
        $respuesta = ModeloClientes::listarClienteYRut($tabla,$id);
        return $respuesta;
    }
    public static function listarempleadoSporCiudad1(){
        $tabla = "clientes";
        $respuesta = ModeloClientes::listarempleadosporCiudad1($tabla);
        return $respuesta;
    }

    static public function CrearClientes($datos) {
        $cliente = "clientes";
        $respuesta = ModeloClientes::CrearCliente($cliente, $datos);
        return $respuesta;
    }

    static public function EliminarClientes($id_cliente) {
       
        $respuesta = ModeloClientes::EliminarCliente( $id_cliente);
        return $respuesta;
    }

    static public function EditarClientes($datos) {
        
        $respuesta = ModeloClientes::EditarCliente($datos);
        return $respuesta;
    }
}
