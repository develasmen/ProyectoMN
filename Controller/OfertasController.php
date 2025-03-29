<?php

    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/OfertasModel.php";    

    function ConsultarOfertas()
    {
        return ConsultarOfertasModel();
    }   

    function ConsultarOferta($id)
    {
        $resultado = ConsultarOfertaModel($id);
        return mysqli_fetch_array($resultado);
    }   


    if(isset($_POST["btnCrearOferta"]))
    {
        $puesto = $_POST["txtPuesto"];
        $salario = $_POST["txtSalario"];
        $horario = $_POST["txtHorario"];
    
        $resultado = CrearOfertaModel($puesto,$salario,$horario);
    
        if($resultado == true)
        {
            header('location: ../../View/Ofertas/consultarOfertas.php');
        }
        else
        {
            $_POST["Message"] = "La oferta no se pudo crear";
        }
    }

    if(isset($_POST["btnActualizarOferta"]))
    {
        $id = $_POST["txtId"];
        $puesto = $_POST["txtPuesto"];
        $salario = $_POST["txtSalario"];
        $horario = $_POST["txtHorario"];
    
        $resultado = ActualizarOfertaModel($id,$puesto,$salario,$horario);
    
        if($resultado == true)
        {
            header('location: ../../View/Ofertas/consultarOfertas.php');
        }
        else
        {
            $_POST["Message"] = "La oferta no se pudo actualizar";
        }
    }
?>
