<?php
include('../Variables/Conexion.php');
include("includes/consulta.php");

if (isset($_POST['editar'])) {

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $identificacion = $_POST['identi'];
    $correo = $_POST['correo'];
    $codigo_pro = $_POST['codigo_pro'];
    $insumo = $_POST['insumo'];
    $nombre_empresa  = $_POST['nombre_empresa'];

   if (!empty($nombres) && !empty($apellidos)  && !empty($identificacion)  && !empty($correo)&& !empty($codigo_pro) && !empty($insumo) && !empty($nombre_empresa)) {

        $id_proveedores = (int) $_GET['idp'];

        $querya = " UPDATE tb_proveedores SET nombres='$nombres',apellidos='$apellidos',identificacion='$identificacion',correo='$correo',codigo_pro='$codigo_pro',insumo='$insumo',nombre_empresa='$nombre_empresa' WHERE id='$id_proveedores'";

        $resultac = $conexion->query($querya);

        if ($resultac) {
            header("refresh:2;url=../Vistas/vista_proveedores.php");
            mostrarHtml1();
            //header("Location:../Vistas/CrearUsuario.php");
            exit();
        } else {
            header("refresh:2;url=../Vistas/vista_proveedores.php");
            mostrarHtml2();
            //header("Location:../Vistas/CrearUsuario.php");
            exit();
        }
    }
}
function mostrarHtml2()
{

    echo "
                <!DOCTYPE html>
                <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                        <!-- Bootstrap CSS -->
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css\" integrity=\"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I\" crossorigin=\"anonymous\">
                        <link href=\"https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap\" rel=\"stylesheet\">
                        <script src=\"https://kit.fontawesome.com/ffec4ec2ed.js\" crossorigin=\"anonymous\"></script>
                        <link rel=\"\shortcut icon\" href=\"../Imagenes/IconWeb.jpg\" />
                        <title>Validar registro</title>

                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                            <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\" />
                            </symbol>
                            <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\" />
                            </symbol>
                            <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\" />
                            </symbol>
                        </svg>
                    </head>
                    <body>
                    <div class=\"mx-auto col-auto p-5\" style=\"width: 50%;\">
                        <div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">
                            <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Danger:\">
                                <use xlink:href=\"#exclamation-triangle-fill\" />
                            </svg>
                            <div class=\"texto-alerta\">
                                &nbsp;&nbsp;No se ha editado el administrador!
                            </div>
                        </div>
                    <div>
                    </body>
                </html>";
    echo 'Redirigiendo en 3 segundos, si no, <a href="../Vistas/vista_administradores.php">Clic aquí</a> para volver.';
}
function mostrarHtml1()
{
    echo "<!DOCTYPE html>
                <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                        <!-- Bootstrap CSS -->
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css\" integrity=\"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I\" crossorigin=\"anonymous\">
                        <link href=\"https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap\" rel=\"stylesheet\">
                        <script src=\"https://kit.fontawesome.com/ffec4ec2ed.js\" crossorigin=\"anonymous\"></script>
                        <link rel=\"\shortcut icon\" href=\"../Imagenes/IconWeb.jpg\" />
                        <title>Validar registro</title>

                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                            <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\" />
                            </symbol>
                            <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\" />
                            </symbol>
                            <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\" />
                            </symbol>
                        </svg>
                    </head>
                    <body>
                    <div class=\"mx-auto col-auto p-5\" style=\"width: 50%;\">
                        <div class=\"alert alert-success d-flex align-items-center\" role=\"alert\">
                            <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Success:\">
                                <use xlink:href=\"#check-circle-fill\" />
                            </svg>
                            <div class=\"texto-alerta\">
                                &nbsp;&nbsp;Se han efectuado los cambios correctamente!
                            </div>
                        </div>
                    <div>
                    </body>
                </html>";
    echo 'Redirigiendo en 3 segundos, si no, <a href="../Vistas/vista_administradores.php">Clic aquí</a> para ir.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/style.css?v=1" />
    <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />

    <title>Ver administradores</title>
</head>

<body>
    <header>
        <?php include("includes/header.php"); ?>
    </header>
    <main>
        <div class="contenedor">
            <aside>
                <?php include("includes/aside.php"); ?>
            </aside>
            <div class="contenedor-2">
                <form action="" method="POST" class="mb-3">
                    <div class="post">
                        <h1 class="titulo">Editar Proveedores</h1>
                        <div class="form-group">
                            <div class="mb-4">
                                <label for="name" class="form-label font-weight-bold">Nombres:</label>
                                <input type="text" class="form-control bg-light-s border-1" name="nombres" value=<?php echo $filasp['nombres']; ?> id="name" required="" />
                            </div>
                            <div class="mb-4">
                                <label for="ape" class="form-label font-weight-bold">Apellidos:</label>
                                <input type="text" class="form-control bg-light-s border-1" name="apellidos" value=<?php echo $filasp['apellidos']; ?> id="ape" required="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-4">
                                <label for="ide" class="form-label font-weight-bold">Identificación:</label>
                                <input type="text" class="form-control bg-light-s border-1" name="identi" value=<?php echo $filasp['identificacion']; ?> id="ide" required="" />
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="mb-4">
                                <label for="cor" class="form-label font-weight-bold">Correo:</label>
                                <input type="text" class="form-control bg-light-s border-1" name="correo" value=<?php echo $filasp['correo']; ?> id="cor" required="" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="mb-4">
                                <label for="cod" class="form-label font-weight-bold">Código de Proveedor:</label>
                                <input type="text" class="form-control bg-light-s border-1" name="codigo_pro" value=<?php echo $filasp['codigo_pro']; ?> id="cod" required="" />
                            </div>
                            <div class="mb-4">
                                <label for="cor" class="form-label font-weight-bold">Tipó de Insumo:</label>
                                <input type="text" class="form-control bg-light-s border-1" name="insumo" value=<?php echo $filasp['insumo']; ?> id="ins" required="" />
                            </div>
                            <div class="mb-4">
                                <label for="cor" class="form-label font-weight-bold">Nombre de la Empresa:</label>
                                <input type="text" class="form-control bg-light-s border-1" name="nombre_empresa" value=<?php echo $filasp['nombre_empresa']; ?> id="nbr" required="" />
                            </div>
                            <button type="submit" name="editar" class="btn btn-primary w-100">Guardar cambios</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>
</body>

</html>