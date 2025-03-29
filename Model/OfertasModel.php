<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/BaseDatosModel.php";

function ConsultarOfertasModel()
    {
        try
        {
            $context = AbrirBaseDatos();  
        
            $sentencia = "CALL SP_ConsultarOfertas()";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }
        catch(Exception $error)
        {
            return null;
        }
    }

    function ConsultarOfertaModel($id)
    {
        try
        {
            $context = AbrirBaseDatos();  
        
            $sentencia = "CALL SP_ConsultarOferta('$id')";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }
        catch(Exception $error)
        {
            return null;
        }
    }

    function CrearOfertaModel($puesto,$salario,$horario)
    {
        try{
            $context = AbrirBaseDatos(); 
            $sentencia = "CALL SP_CrearOferta('$puesto','$salario','$horario')";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }catch(Exception $e){
            return false;
        }
        
    }

    function ActualizarOfertaModel($id,$puesto,$salario,$horario)
    {
        try{
            $context = AbrirBaseDatos(); 
            $sentencia = "CALL SP_ActualizarOferta('$id','$puesto','$salario','$horario')";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }catch(Exception $e){
            return false;
        }
        
    }

?>