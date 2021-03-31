<?php
require_once "conexion.php";
class ModeloContrato
{

    //Insertar
    static public function CrearContrato($datosc)
    {
        $sql = DB::conexion()->prepare("INSERT INTO contratos(ciudadresidencia,inicioc,nacionalidad,desempenado,ubicacione,cargo,finc,idcliente) VALUES (:ciudadresidencia,:inicioc,:nacionalidad,:desempenado,:ubicacione,:cargo,:finc,:idcliente)");
        
        $sql->bindParam(":ciudadresidencia", $datosc["ciudadresidencia"], PDO::PARAM_STR);
        $sql->bindParam(":inicioc", $datosc["inicioc"], PDO::PARAM_STR);
        $sql->bindParam(":nacionalidad", $datosc["nacionalidad"], PDO::PARAM_STR);
        $sql->bindParam(":desempenado", $datosc["desempenado"], PDO::PARAM_STR);
        $sql->bindParam(":ubicacione", $datosc["ubicacione"], PDO::PARAM_STR);
        $sql->bindParam(":cargo", $datosc["cargo"], PDO::PARAM_STR);
        $sql->bindParam(":finc", $datosc["finc"], PDO::PARAM_STR);
        $sql->bindParam(":idcliente", $datosc["idcliente"], PDO::PARAM_STR);
       
        
        
    
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    //Listar
    static public function listarInfocontratoyempleado($idcliente)
    {
        $sql = DB::conexion()->prepare("SELECT contratos.id_contrato,contratos.ciudadresidencia,contratos.inicioc,contratos.nacionalidad,contratos.desempenado,contratos.ubicacione,contratos.cargo,contratos.finc,contratos.idcliente ,clientes.id,clientes.nombreemp,clientes.rute,clientes.profesion FROM contratos INNER JOIN clientes on clientes.id = contratos.idcliente where contratos.idcliente = '$idcliente'");
        $sql->execute();
        return $sql->fetchall();
    }
    static public function listarContratos($idcliente)
    {
        $sql = DB::conexion()->prepare("SELECT * FROM contratos where idcliente = '$idcliente'");
        $sql->execute();
        return $sql->fetchAll();
    }
    static public function listarContratosyempleados($idcliente)
    {
        $sql = DB::conexion()->prepare("SELECT * FROM contratos,empleados where contratos.idcliente = empleados.id");
        $sql->execute();
        return $sql->fetchAll();
    }





    /////////////////////////////77
    static public function listarClienteYRut($tablac, $id)
    {
        $sql = DB::conexion()->prepare("SELECT nombreemp, rute FROM $tablac where id='$id'");
        $sql->execute();
        return $sql->fetchAll();
    }
    ///////////////////////////77

    //Editar

    static public function EditarContrato( $datosc)
    {

        $sql = DB::conexion()->prepare("UPDATE contratos SET ciudadresidencia=:ciudadresidencia,inicioc=:inicioc, nacionalidad=:nacionalidad, desempenado=:desempenado, ubicacione=:ubicacione, cargo=:cargo, finc=:finc,idcliente=:idcliente  WHERE id_contrato=:id_contrato");
        $sql->bindParam(":id_contrato", $datosc["id_contrato"], PDO::PARAM_STR);
        $sql->bindParam(":ciudadresidencia", $datosc["ciudadresidencia"], PDO::PARAM_STR);
        $sql->bindParam(":inicioc", $datosc["inicioc"], PDO::PARAM_STR);
        $sql->bindParam(":nacionalidad", $datosc["nacionalidad"], PDO::PARAM_STR);
        $sql->bindParam(":desempenado", $datosc["desempenado"], PDO::PARAM_STR);
        $sql->bindParam(":ubicacione", $datosc["ubicacione"], PDO::PARAM_STR);
        $sql->bindParam(":cargo", $datosc["cargo"], PDO::PARAM_STR);
        $sql->bindParam(":finc", $datosc["finc"], PDO::PARAM_STR);
        $sql->bindParam(":idcliente", $datosc["idcliente"], PDO::PARAM_STR);
        

        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    //Eliminar
    static public function EliminarContrato($id)
    {
        $sql = DB::conexion()->prepare("DELETE FROM contratos WHERE id_contrato=:id_contrato");
        $sql->bindParam(":id_contrato",$id, PDO::PARAM_INT);
        echo ($id);
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

}
