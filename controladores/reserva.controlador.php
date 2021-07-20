<?php

Class ControladorReserva{

    /*=============================================
    Mostrar Reserva
    =============================================*/

    static public function ctrMostrarReserva($valor){

        $tabla1 = "salas";
        $tabla2 = "reserva";
        $tabla3 = "categorias";

        $respuesta = ModeloReserva::mdlMostrarReserva($tabla1, $tabla2, $tabla3, $valor);

        return $respuesta;

    }

    /*=============================================
    Mostrar Código Reserva
    =============================================*/

    static public function ctrMostrarCodigoReserva($valor){

        $tabla = "reserva";
     
        $respuesta = ModeloReserva::mdlMostrarCodigoReserva($tabla, $valor);

        return $respuesta;

    }
}