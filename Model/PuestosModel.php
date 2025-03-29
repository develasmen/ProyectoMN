<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/BaseDatosModel.php";


function ConsultarPuestosModel()
    {
        try
        {
            $context = AbrirBaseDatos();  
        
            $sentencia = "CALL SP_ConsultarPuestos()";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }
        catch(Exception $error)
        {
            return null;
        }
    }


    


    function CrearPuestoModel($nombre,$descripcion)
    {
        try{
            $context = AbrirBaseDatos(); 
        
            $sentencia = "CALL SP_CrearPuesto('$nombre','$descripcion')";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }catch(Exception $e){
            return false;
        }
        
    }
?>

