<?php
Class ControllerContratos{
    

    static public function CrearContratos($datosc) {
        
        $respuesta = ModeloContrato::CrearContrato($datosc);
        return $respuesta;
    }

    //////////listado
    public static function listarContratos($idcliente){
        
        $respuesta = ModeloContrato::listarContratos($idcliente);
        return $respuesta;
    }
    public static function listarinfocontratosyempleado($idcliente){
        $respuesta = ModeloContrato::listarinfoContratoyempleado($idcliente);
        return $respuesta;
    }

    //////
   
   
   
   
   
   
   
   
    static public function EliminarContratos($id_contrato) {
        
        $respuesta = ModeloContrato::EliminarContrato($id_contrato);
        return $respuesta;
    }


    
    static public function EditarContratos($datosc) {
        
        $respuesta = ModeloContrato::EditarContrato($datosc);
        return $respuesta;
    }
}