<?php
include("../Vistas/includes/consulta.php");
ob_start();


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />
<!-- cambiar nombre titulo -->
    <title>Reporte Productos</title>
</head>
<style>
    td{
        padding: 4px;
    }
    table{
        border: 1px solid grey;

    }
</style>
<body>
    <main>
        <div class="contenedor">
            <div class="contenedor-3">
                <h1 class="titulo">Reporte de productos</h1>

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
<?php

$html = ob_get_clean();
//echo $html;
require_once '../Librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
// $options->setDefaultFont('Courier');

// $dompdf->loadHtml('Bienvenido al reporte de clientes');
$dompdf->loadHtml($html);
// $dompdf->setPaper('A4', 'landscape');
$dompdf->setPaper('letter');
$dompdf->render();
//lo unico que se cambia
$dompdf->stream('productos.pdf', array('Attachment' => false));
?>