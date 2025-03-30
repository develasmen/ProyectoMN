<?php

    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/BaseDatosModel.php";


    function ActualizarContrasennaModel($id, $contrasennaNueva, $contrasennaActual)
        {
            try
            {
                $context = AbrirBaseDatos();

                $sentencia = "CALL SP_ActualizarContrasenna('$id', '$contrasennaNueva', '$contrasennaActual')";
                $resultado = $context -> query($sentencia);
        
                CerrarBaseDatos($context);

                return $resultado;
            }
            catch(Exception $error)
            {
                return null;
            }        
        }

?>