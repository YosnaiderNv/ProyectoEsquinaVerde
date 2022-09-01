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

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
     -->
    <!-- <link rel="stylesheet" href="../Css/style.css?v=1" /> -->
    <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />

    <title>Reporte de clientes</title>
</head>

<style>
    td {
        padding: 10px;
    }
</style>

<body>
    <main>
        <div class="contenedor">
            <div class="contenedor-3">
                <h1 class="titulo">Reporte de clientes</h1>
                <table class="table table-dark table-hover caption-top" style="text-align: center; margin:0 auto;">
                    <caption>Lista de clientes</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">CC</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $v = 1;
                        foreach ($rowsc as $contenido) : ?>
                            <tr>
                                <th scope="row"><?php echo $v; ?></th>
                                <td><?php echo $contenido['nombre']; ?></td>
                                <td><?php echo $contenido['apellidos']; ?></td>
                                <td><?php echo $contenido['identificacion']; ?></td>
                                <td><?php echo $contenido['telefono']; ?></td>
                                <td><?php echo $contenido['correo']; ?></td>
                                <td><?php echo $contenido['clave']; ?></td>
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
// echo $html
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
$dompdf->stream('clientes.pdf', array('Attachment' => false));



?>