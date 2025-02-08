<?php

    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/LoginModel.php";

if(isset($_POST["btnRegistrarCuenta"]))
{
    $identificacion = $_POST["txtIdentificacion"];
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $resultado = RegistrarCuentaModel($identificacion,$nombre,$correo,$contrasenna);

    //header('location: ../../View/Login/login.php');
}

?>