<?php
include("../Vistas/includes/consulta.php");
ob_start();

use Dompdf\Dompdf;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />
<!-- cambiar nombre titulo -->
    <title>Reporte Proveedores</title>
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
                <h1 class="titulo">Reporte de Proveedores</h1>

                <table class="table table-dark table-hover caption-top">
                    <caption>Lista de Proveedores</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">CC</th>
                            <th scope="col">Código</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Tipo de insumo</th>
                            <th scope="col">nombre de la Emprea</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $v = 1;
                         foreach ($rowsp as $contenido) : ?>
                            <tr>
                                <th scope="row"><?php echo $v; ?></th>
                                <td><?php echo $contenido['nombres']; ?></td>
                                <td><?php echo $contenido['apellidos']; ?></td>
                                <td><?php echo $contenido['identificacion']; ?></td>
                                <td><?php echo $contenido['codigo_pro']; ?></td> 
                                <td><?php echo $contenido['correo']; ?></td>
                                <td><?php echo $contenido['insumo']; ?></td>
                                <td><?php echo $contenido['nombre_empresa']; ?></td>
                        
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
require_once '../Librerias/dompdf/autoload.inc.php';

$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));

// $options->setDefaultFont('Courier');
$dompdf->setOptions($options);
// $dompdf->loadHtml('Bienvenido al reporte de clientes');
$dompdf->loadHtml($html);
// $dompdf->setPaper('A4', 'landscape');
$dompdf->setPaper('letter');
$dompdf->render();
//lo unico que se cambia
$dompdf->stream('Proveedores.pdf', array('Attachment' => false));
?>