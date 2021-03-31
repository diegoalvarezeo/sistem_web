<?php
require_once "conexion.php";
class ModeloRoles
{
    static public function listarRoles()
    {
        $sql = DB::conexion()->prepare("SELECT id_rol, rol FROM roles");
        $sql->execute();
        return $sql->fetchAll();
    }




}