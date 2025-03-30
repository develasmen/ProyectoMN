<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/UsuariosModel.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Controller/UtilitariosController.php";

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }



    if(isset($_POST["btnActualizarContrasenna"]))
    {
        $contrasennaActual = $_POST["txtContrasennaActual"];
        $contrasennaNueva = $_POST["txtContrasennaNueva"];
        $contrasennaConfirmar = $_POST["txtContrasennaConfirmar"];


        if($contrasennaNueva != $contrasennaConfirmar)
        {
            $_POST["Message"] = "Debe confirmar correctamente su contrasena nueva";
            return;
        }

        $resultadoActualizacion = ActualizarContrasennaModel($_SESSION["IdUsuario"], $contrasennaNueva, $contrasennaActual);



        $datos = mysqli_fetch_array($resultadoActualizacion);


        if($datos["Resultado"] == true)
        {  
            //Enviamos el correo
            $contenido = "<html><body>
            Estimado(a) " . $datos["NombreUsuario"] . "<br/><br/>
            Se ha realizo el cambio de su contrasena correctamente <br/>
            Si usted no realizo esta accion comuniquese con el centro de atencion de Usuarios. </b><br/>";

            $resultadoCorreo = EnviarCorreo("Actualizacion de Contraseña",$contenido, $_SESSION["CorreoUsuario"]);

            if($resultadoCorreo == true)
            {
                header('location: ../../View/Login/home.php');
            }
        }
            $_POST["Message"] = "No se pudo Actualizar el acceso al sistema correctamente";    
    }
?>