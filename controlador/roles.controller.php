<?php
Class ControllerRoles{
    public static function listarRoles(){
        $tabla = "roles";
        $respuesta = ModeloRoles::listarRoles($tabla);
        return $respuesta;
    }

    

    static public function CrearClientes($datos) {
        $rol= "roles";
        $respuesta = ModeloClientes::CrearCliente($rol, $datos);
        return $respuesta;
    }

    static public function EliminarClientes($id_cliente) {
        $cliente = "clientes";
        $respuesta = ModeloClientes::EliminarCliente($cliente, $id_cliente);
        return $respuesta;
    }

    static public function EditarClientes($datos) {
        $cliente = "clientes";
        $respuesta = ModeloClientes::EditarCliente($cliente, $datos);
        return $respuesta;
    }
}
?>