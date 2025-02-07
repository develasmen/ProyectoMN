<?php

if(isset($_POST["btnIniciarSesion"]))
{
    //echo $_POST["txtIdentificacion"] . ' ' . $_POST["txtContrasenna"];
    //Llamar al Modelo, pasarle la identificación y la contraseña

    header('location: ../../View/Login/home.php');
}

if(isset($_POST["btnRegistrarCuenta"]))
{
    header('location: ../../View/Login/login.php');
}

?>