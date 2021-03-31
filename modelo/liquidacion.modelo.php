<?php
require_once "conexion.php";
class ModeloLiquidaciones
{

    //Insertar
    static public function CrearLiquidacion($datosl)
    {
        $sql = DB::conexion()->prepare("INSERT INTO liquidaciones(anio,mes,diast,sueldob,aguinaldo,bonoa,bonop,gratificacion,colacion,movilizacion,utilesa,asigf,descafpmodelo,descfonasa,impuestou,seguros,fecha,id_cliente) VALUES (:anio,:mes,:diast,:sueldob,:aguinaldo,:bonoa,:bonop,:gratificacion,:colacion,:movilizacion,:utilesa,:asigf,:descafpmodelo,:descfonasa,:impuestou,:seguros,:fecha,:id_cliente)");
        
        $sql->bindParam(":anio", $datosl["anio"], PDO::PARAM_STR);
        $sql->bindParam(":mes", $datosl["mes"], PDO::PARAM_STR);
        $sql->bindParam(":diast", $datosl["diast"], PDO::PARAM_STR);
        $sql->bindParam(":sueldob", $datosl["sueldob"], PDO::PARAM_STR);
        $sql->bindParam(":aguinaldo", $datosl["aguinaldo"], PDO::PARAM_STR);
        $sql->bindParam(":bonoa", $datosl["bonoa"], PDO::PARAM_STR);
        $sql->bindParam(":bonop", $datosl["bonop"], PDO::PARAM_STR);
        $sql->bindParam(":gratificacion", $datosl["gratificacion"], PDO::PARAM_STR);
        $sql->bindParam(":colacion", $datosl["colacion"], PDO::PARAM_STR);
        $sql->bindParam(":movilizacion", $datosl["movilizacion"], PDO::PARAM_STR);
        $sql->bindParam(":utilesa", $datosl["utilesa"], PDO::PARAM_STR);
        $sql->bindParam(":asigf", $datosl["asigf"], PDO::PARAM_STR);
        $sql->bindParam(":descafpmodelo", $datosl["descafpmodelo"], PDO::PARAM_STR);
        $sql->bindParam(":descfonasa", $datosl["descfonasa"], PDO::PARAM_STR);
        $sql->bindParam(":impuestou", $datosl["impuestou"], PDO::PARAM_STR);
        $sql->bindParam(":seguros", $datosl["seguros"], PDO::PARAM_STR);
        $sql->bindParam(":fecha", $datosl["fecha"], PDO::PARAM_STR);
        $sql->bindParam(":id_cliente", $datosl["id_cliente"], PDO::PARAM_STR);
        
     
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    //Listar
    static public function listarLiquidacion($id_cliente)
    {
        $sql = DB::conexion()->prepare("SELECT * FROM liquidaciones where id_cliente = '$id_cliente' ");
        $sql->execute();
        return $sql->fetchAll();
    }
    //aqui va $id_liquidacion
    static public function listarInfoliquidacionyempleado($id_cliente)
    {
        $sql = DB::conexion()->prepare("SELECT liquidaciones.id_liquidacion,liquidaciones.mes,liquidaciones.anio,clientes.id,clientes.nombreemp,clientes.rute,clientes.afp,clientes.sistemasalud,clientes.nsucursal,liquidaciones.diast,liquidaciones.sueldob,liquidaciones.aguinaldo,liquidaciones.bonoa,liquidaciones.bonop,liquidaciones.gratificacion,liquidaciones.colacion,liquidaciones.movilizacion,liquidaciones.utilesa,liquidaciones.asigf,liquidaciones.descafpmodelo,liquidaciones.descfonasa,liquidaciones.impuestou,liquidaciones.seguros,liquidaciones.fecha,liquidaciones.id_cliente FROM liquidaciones INNER JOIN clientes ON clientes.id = liquidaciones.id_cliente where liquidaciones.id_cliente = '$id_cliente'");
        
        //$sql = DB::conexion()->prepare("SELECT liquidaciones.mes,liquidaciones.anio,clientes.nombreemp,clientes.rute,clientes.afp,clientes.sistemasalud,liquidaciones.diast,liquidaciones.sueldob,liquidaciones.bonoa,liquidaciones.bonop,liquidaciones.gratificacion,liquidaciones.colacion,liquidaciones.movilizacion,liquidaciones.utilesa,liquidaciones.asigf,liquidaciones.descafpmodelo,liquidaciones.descfonasa,liquidaciones.impuestou,liquidaciones.seguros FROM clientes INNER JOIN liquidaciones ON clientes.id = liquidaciones.id_cliente where liquidaciones.id_liquidacion = '$id_cliente'");
        $sql->execute();
        return $sql->fetchall();
    }
    

    //Editar

    static public function Editarliquidacion($datosl)
    {

        $sql = DB::conexion()->prepare("UPDATE liquidaciones SET anio=:anio,mes=:mes,diast=:diast, sueldob=:sueldob, aguinaldo=:aguinaldo, bonoa=:bonoa, bonop=:bonop,gratificacion=:gratificacion, colacion=:colacion , movilizacion=:movilizacion, utilesa=:utilesa , asigf=:asigf , descafpmodelo=:descafpmodelo,descfonasa=:descfonasa,impuestou=:impuestou, seguros=:seguros,fecha=:fecha,id_cliente=:id_cliente WHERE id_liquidacion=:id_liquidacion");
        
        $sql->bindParam(":id_liquidacion", $datosl["id_liquidacion"], PDO::PARAM_STR);
        $sql->bindParam(":anio", $datosl["anio"], PDO::PARAM_STR);
        $sql->bindParam(":mes", $datosl["mes"], PDO::PARAM_STR);
        $sql->bindParam(":diast", $datosl["diast"], PDO::PARAM_STR);
        $sql->bindParam(":sueldob", $datosl["sueldob"], PDO::PARAM_STR);
        $sql->bindParam(":aguinaldo", $datosl["aguinaldo"], PDO::PARAM_STR);
        $sql->bindParam(":bonoa", $datosl["bonoa"], PDO::PARAM_STR);
        $sql->bindParam(":bonop", $datosl["bonop"], PDO::PARAM_STR);
        $sql->bindParam(":gratificacion", $datosl["gratificacion"], PDO::PARAM_STR);
        $sql->bindParam(":colacion", $datosl["colacion"], PDO::PARAM_STR);
        $sql->bindParam(":movilizacion", $datosl["movilizacion"], PDO::PARAM_STR);
        $sql->bindParam(":utilesa", $datosl["utilesa"], PDO::PARAM_STR);
        $sql->bindParam(":asigf", $datosl["asigf"], PDO::PARAM_STR);
        $sql->bindParam(":descafpmodelo", $datosl["descafpmodelo"], PDO::PARAM_STR);
        $sql->bindParam(":descfonasa", $datosl["descfonasa"], PDO::PARAM_STR);
        $sql->bindParam(":impuestou", $datosl["impuestou"], PDO::PARAM_STR);
        $sql->bindParam(":seguros", $datosl["seguros"], PDO::PARAM_STR);
        $sql->bindParam(":fecha", $datosl["fecha"], PDO::PARAM_STR);
        $sql->bindParam(":id_cliente", $datosl["id_cliente"], PDO::PARAM_STR);
        
        
        
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    //Eliminar
    static public function EliminarLiquidacion( $id)
    {
        $sql = DB::conexion()->prepare("DELETE FROM liquidaciones WHERE id_liquidacion = :id_liquidacion");
        $sql->bindParam(":id_liquidacion",$id, PDO::PARAM_INT);
        echo ("sss");
        if ($sql->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

}
