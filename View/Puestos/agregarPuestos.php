<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/View/layoutInterno.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Controller/PuestosController.php";
?>


<!DOCTYPE html>
<html lang="en">

<?php PrintCss(); ?>



<body id="page-top">

    <div id="wrapper">

        <?php MenuNavegacion(); ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <?php BarraNavegacion(); ?>

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Crear Puesto</h1>
                                </div>

                                <?php  
                                if(isset($_POST["Message"]))
                                {
                                    echo '<div class="alert alert-warning Mensajes">'.$_POST["Message"] . '</div>';
                                }
                            ?>

                                <form action="" method="POST" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Nombre" id="txtNombre"
                                            name="txtNombre"  maxlenght ="50" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control"
                                            placeholder="Descripcion" id="txtDescripcion" name="txtDescripcion" rows= "8" 
                                            maxlenght ="250" required> 
                                        </textarea>
                                    </div>


                                    <input type="submit" class="btn btn-danger" style="width: 200px" value="Procesar"
                                        id="btnCrearPuesto" name="btnCrearPuesto">
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <?php PrintFooter(); ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desea salir del sistema?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Presione salir para finalizar su sesion actual</div>
                <div class="modal-footer">
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-primary" id="btnSalir" name="btnSalir"
                            value="Salir"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php PrintScript(); ?>

</body>

</html>