<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Model/PuestosModel.php";
    
    function ConsultarPuestos()
    {
        return ConsultarPuestosModel();
    }   



     

    if(isset($_POST["btnCrearPuesto"]))
    {
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
    
        $resultado = CrearPuestoModel($nombre,$descripcion);
    
        if($resultado == true)
        {
            header('location: ../../View/Puestos/consultarPuestos.php');
        }
        else
        {
            $_POST["Message"] = "El puesto no pudo ser creado";
        }
    }


    ?>
