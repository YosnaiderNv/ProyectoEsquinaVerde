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

    <title>Ver Productos</title>
</head>

<body>
    <header>
        <?php include("includes/header.php"); ?>
    </header>
    <main>
        <div class="contenedor">
            <aside>
                <?php include("includes/aside.php") ?>
            </aside>
            <div class="contenedor-3">
                <div class="d-sm-flex justify-content-between mb-4">
                    <h1 class="titulo">Productos</h1>
                    <a href="crearProductos.php" class="btn btn-outline-primary" role="button" target="_blank">Agregar nuevo</a>
                    <a href="../Variables/reporte_productos.php" class="btn btn-outline-secondary" role="button" target="_blank">Generar pdf</a>
                </div>
                <table class="table table-dark table-hover caption-top">
                    <caption>Lista de Productos</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Código</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Imagen del Producto</th>

                            <th scope="col" colspan="2">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $v = 1;
                        foreach ($rowspro as $contenido) : ?>
                            <tr>
                                <th scope="row"><?php echo $v; ?></th>
                                <td><?php echo $contenido['nombre']; ?></td>
                                <td><?php echo $contenido['valor']; ?></td>
                                <td><?php echo $contenido['codigo']; ?></td>
                                <td><?php echo $contenido['fecha']; ?></td>
                                <td><?php echo $contenido['descripcion']; ?></td>
                                 <td>
                                    <img src="<?php echo $contenido['ruta'];?>" width="90px" height="90px">
                                </td>
                                <td><a href="vista_EditProductos.php?idprod=<?php echo $contenido['id']; ?>" class="edit">Editar</a></td>
                                <td><a href="?idprd=<?php echo $contenido['id']; ?>" onclick="if (!confirm('Seguro que quieres borrar este proveedor?'))
                    return false" class="delete">Eliminar</a></td>
                                <?php $v++; ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>