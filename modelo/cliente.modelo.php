<?php
require_once "conexion.php";
class ModeloClientes
{

    //Insertar
    static public function CrearCliente($cliente, $datos)
    {
        $sql = DB::conexion()->prepare("INSERT INTO clientes (nombreemp,rute,direccion,profesion,correo,telefono,afp,sistemasalud,nsucursal,contrasena,idrol) VALUES (:nombreemp,:rute,:direccion,:profesion,:correo,:telefono,:afp,:sistemasalud,:nsucursal,:contrasena,:idrol)");
        
        $sql->bindParam(":nombreemp", $datos["nombreemp"], PDO::PARAM_STR);
        $sql->bindParam(":rute", $datos["rute"], PDO::PARAM_STR);
        $sql->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $sql->bindParam(":profesion", $datos["profesion"], PDO::PARAM_STR);
        $sql->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $sql->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $sql->bindParam(":afp", $datos["afp"], PDO::PARAM_STR);
        $sql->bindParam(":sistemasalud", $datos["sistemasalud"], PDO::PARAM_STR);
        $sql->bindParam(":nsucursal", $datos["nsucursal"], PDO::PARAM_STR);
        $sql->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);
        $sql->bindParam(":idrol", $datos["idrol"], PDO::PARAM_STR);
        
        //$sql->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        //$sql->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        //$sql->bindParam(":detalles", $datos["detalles"], PDO::PARAM_STR);
        //$sql->bindParam(":nacionalidad", $datos["nacionalidad"], PDO::PARAM_STR);
    
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    //Listar
    static public function listarCliente()
    {
        $sql = DB::conexion()->prepare("SELECT * FROM clientes");
        $sql->execute();
        return $sql->fetchAll();
    }
    static public function listarClienteYRut($tabla, $id)
    {
        $sql = DB::conexion()->prepare("SELECT nombreemp, rute FROM $tabla where id='$id'");
        $sql->execute();
        return $sql->fetchAll();
    }
    static public function listarempleadosporCiudad1(){
        $sql = DB::conexion()->prepare("SELECT * FROM clientes where direccion = 'nuevo'");
        $sql-> execute();
        return $sql->fetchall();
    }

    //Editar

    static public function EditarCliente( $datos)
    {

        $sql = DB::conexion()->prepare("UPDATE clientes SET nombreemp=:nombreemp,rute=:rute, direccion=:direccion, profesion=:profesion, correo=:correo, telefono=:telefono, afp=:afp , sistemasalud=:sistemasalud,nsucursal=:nsucursal, contrasena=:contrasena ,idrol=:idrol WHERE id=:id");
       
        $sql->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        $sql->bindParam(":nombreemp", $datos["nombreemp"], PDO::PARAM_STR);
        $sql->bindParam(":rute", $datos["rute"], PDO::PARAM_STR);
        $sql->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $sql->bindParam(":profesion", $datos["profesion"], PDO::PARAM_STR);
        $sql->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $sql->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $sql->bindParam(":afp", $datos["afp"], PDO::PARAM_STR);
        $sql->bindParam(":sistemasalud", $datos["sistemasalud"], PDO::PARAM_STR);
        $sql->bindParam(":nsucursal", $datos["nsucursal"], PDO::PARAM_STR);
        $sql->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);
        $sql->bindParam(":idrol", $datos["idrol"], PDO::PARAM_STR);
        
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    //Eliminar
    static public function Eliminarcliente( $id_tabla)
    {
        $sql = DB::conexion()->prepare("DELETE FROM clientes WHERE id = :id");
        $sql->bindParam(":id", $id_tabla, PDO::PARAM_INT);
        echo ("sss");
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

}
