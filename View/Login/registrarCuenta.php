<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/Controller/LoginController.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Proyecto/View/layoutExterno.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php PrintCss(); ?>

<body class="bg-gradient-primary">

    <div class="container MargenSuperior">

    <div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta</h1>
                            </div>

                            <?php
                                if(isset($_POST["Message"]))
                                {
                                    echo '<div class="alert alert-warning Mensajes">' . $_POST["Message"] . '</div>';                                   
                                }
                            ?>
                            
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    placeholder="Identificación" id="txtIdentificacion" name="txtIdentificacion"
                                    onkeyup="ConsultarNombre()" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        placeholder="Nombre" id="txtNombre" name="txtNombre" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        placeholder="Correo" id="txtCorreo" name="txtCorreo" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        placeholder="Contraseña" id="txtContrasenna" name="txtContrasenna" required>
                                </div>
                                <input type="submit" class="btn btn-danger btn-user btn-block" value="Procesar"
                                        id="btnRegistrarCuenta" name="btnRegistrarCuenta" >
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="recuperarContrasenna.php">Recuperar Contraseña</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Iniciar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </div>

    <?php PrintScript(); ?>

</body>

</html>