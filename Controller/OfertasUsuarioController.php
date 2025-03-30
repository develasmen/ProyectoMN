<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/OfertasUsuariosModel.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Controller/UtilitariosController.php";

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    function ConsultarOfertasUsuario($Id)
    {
        $resultado = ConsultarOfertasUsuarioModel($Id);
        return mysqli_fetch_array($resultado);
    }


?>