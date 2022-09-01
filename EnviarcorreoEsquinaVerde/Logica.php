
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



$suscriptor = $_POST['txtNombres'];
$email = $_POST['txtCorreo'];
$contenido = $_POST['txtBody'];

$Elmail = new PHPMailer(true);

try {
    //Server settings
    $Elmail->SMTPDebug = SMTP::DEBUG_SERVER;
    $Elmail->isSMTP();
    $Elmail->Host       = 'smtp.gmail.com';
    $Elmail->SMTPAuth   = true;
    $Elmail->Username   = 'Aqui va el correo';
    $Elmail->Password   = '';
    $Elmail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $Elmail->Port       = 465;

    //Recipients
    $Elmail->setFrom('laesquinaverde37@gmail.com', 'ESQUINA VERDE');
    $Elmail->addAddress($email, $nombre);


    //Content
    $Elmail->isHTML(true);
    $Elmail->CharSet = 'UTF-8';
    $Elmail->Subject = 'BIENVENIDO A NUESTRA TIENDA ESQUINA VERDE '.$suscriptor;
    $Elmail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table style="border: 1px solid black;width: 100%;">
            <thead>
                <tr>
                    <td style="text-align: center;background: green;color:#FFFFFF" colspan="2">
                        <h1><b>Gracias por contactar con nosotros, '.$suscriptor.'</b></h1>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="20%">
                        <img src="" alt="">
                    </td>
                    <td style="text-align: left;" align="justify"><span style="font-size: 25px;">Trataremos de responder a tu solicitud lo antes posible, por favor, espera nuestra respuesta, gracias.</span></td>
                </tr>
            </thead>
        </table>
    </body>
    </html>';
    $Elmail->send();
    header('location:index.php?c=s');
   // die();
} catch (Exception $e) {
    //header('location:index.php?c=e');
   // die();
   echo $e;
}
