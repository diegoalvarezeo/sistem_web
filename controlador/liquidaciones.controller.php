<?php
Class ControllerLiquidaciones{
    

    static public function CrearLiquidaciones($datosl) {
        
        $respuesta = ModeloLiquidaciones::CrearLiquidacion($datosl);
        return $respuesta;
    }
    public static function listarLiquidaciones($id_cliente){
        
        $respuesta = ModeloLiquidaciones::listarLiquidacion($id_cliente);
        return $respuesta;
    }
    public static function listarinfoliquidacionyempleado($id_cliente){
        $respuesta = ModeloLiquidaciones::listarInfoliquidacionyempleado($id_cliente);
        return $respuesta;
    }

   
   
   
   
   
   
   
   
    static public function EliminarLiquidaciones($id_liquidacion) {
        
        $respuesta = ModeloLiquidaciones::EliminarLiquidacion($id_liquidacion);
        return $respuesta;
    }

    static public function Editarliquidaciones($datosl) {
        
        $respuesta = ModeloLiquidaciones::Editarliquidacion($datosl);
        return $respuesta;
    }
}