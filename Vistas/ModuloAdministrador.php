<?php
include("includes/consulta.php");
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
    <title>Administración</title>
</head>

<body class="indexBody">
    <header>
        <?php include("includes/header.php") ?>
    </header>
    <main>
        <div class="contenedor">
            <aside>
                <?php include("includes/aside.php"); ?>
            </aside>
            <div class="contenedor-2">
                <div class="post">
                    <h1 class="titulo">Tu configuración</h1>
                    <div class="form-group">
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Nombre:</label>
                            <input type="text" class="form-control bg-teal-x border-1" value=<?php echo $filas['nombre']; ?> disabled />
                        </div>
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Apellidos:</label>
                            <input type="text" class="form-control bg-teal-x border-1" value=<?php echo $filas['apellidos']; ?> disabled />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Teléfono:</label>
                            <input type="text" class="form-control bg-teal-x border-1" value=<?php echo $filas['telefono']; ?> disabled />
                        </div>
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Correo:</label>
                            <input type="text" class="form-control bg-teal-x border-1" value=<?php echo $filas['correo']; ?> disabled />
                        </div>
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Identificación:</label>
                            <input type="text" class="form-control bg-teal-x border-1" value=<?php echo $filas['identificacion']; ?> disabled />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Código de administrador:</label>
                            <input type="text" class="form-control bg-teal-x border-1" value=<?php echo $filas['codigo_admin']; ?> disabled />
                        </div>
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Contraseña:</label>
                            <input type="text" class="form-control bg-teal-x border-1" value=<?php echo $filas['pass']; ?> disabled />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>