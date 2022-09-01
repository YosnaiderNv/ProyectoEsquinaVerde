<?php
require('../Variables/Conexion.php');
session_start();
ob_start();

if (!isset($_SESSION['exito'])) {
    header("refresh:3;url=Login.php");
    mostrarHtml3();
    exit();
} else {
    /*consulta 1*/
    $usuario = $_SESSION['exito'];
    $query = "SELECT * FROM tb_administradores where identificacion = $usuario";
    $resultado = $conexion->query($query);
    $filas = $resultado->fetch_assoc();

    /*consulta 2*/
    $query2 = "SELECT * FROM tb_administradores";
    $res = $conexion->query($query2);
    while ($row = $res->fetch_array()) {
        $rows[] = $row;
    }
    /*consulta 3*/
    if (isset($_GET['ida'])) {
        $id_admin = (int) $_GET['ida'];
        $query3 = "SELECT * FROM tb_administradores where id = $id_admin LIMIT 1";
        $resultado2 = $conexion->query($query3);
        $filasE = $resultado2->fetch_assoc();
    } else {
        $id_admin = 0;
    }
    /*consulta 4*/
    $query4 = "SELECT * FROM tb_clientes";
    $res2 = $conexion->query($query4);
    while ($rowc = $res2->fetch_array()) {
        $rowsc[] = $rowc;
    }if(!$res2){
        $rowsc = "no hay clientes en la tabla";
    }

    /*consulta 5*/
    if (isset($_GET['idc'])) {
        $id_cliente = (int) $_GET['idc'];
        $query5 = "SELECT * FROM tb_clientes where id = $id_cliente LIMIT 1";
        $resultado5 = $conexion->query($query5);
        $filasC = $resultado5->fetch_assoc();
    } else {
        $id_cliente = 0;
    }
    /*consulta 6*/
    if (isset($_GET['idce'])) {
        $id_cliente = (int) $_GET['idce'];
        $query6 = "DELETE  FROM tb_clientes where id = $id_cliente LIMIT 1";
        $resultado6 = $conexion->query($query6);
    }else{
        $id_cliente = 0;
    }
    /*consulta 7*/
    if (isset($_GET['idea'])) {
        $id_admin = (int) $_GET['idea'];
        $query7 = "DELETE  FROM tb_administradores where id = $id_admin LIMIT 1";
        $resultado7 = $conexion->query($query7);
    } else {
        $id_admin = 0;
    }
    /*consulta 8*/
    $query8 = "SELECT * FROM tb_proveedores";
    $res8 = $conexion->query($query8);
    while ($rowp = $res8->fetch_array()) {
        $rowsp[] = $rowp;
    }if(!$res8){
        $rowsp = "no hay clientes en la tabla";
    }
/*consulta 9*/
    if (isset($_GET['idp'])) {
        $id_proveedores = (int) $_GET['idp'];
        $query9 = "SELECT * FROM tb_proveedores where id = $id_proveedores LIMIT 1";
        $resultado9 = $conexion->query($query9);
        $filasp = $resultado9->fetch_assoc();
    } else {
        $id_proveedores = 0;
    }
    /*consulta 10*/
    if (isset($_GET['idpe'])) {
        $id_proveedores = (int) $_GET['idpe'];
        $query10 = "DELETE  FROM tb_proveedores where id = $id_proveedores LIMIT 1";
        $resultado10 = $conexion->query($query10);
    }else{
        $id_proveedores = 0;
    }
      /*consulta 11*/
    $query11 = "SELECT * FROM tb_productos";
    $res11 = $conexion->query($query11);
    while ($rowpr = $res11->fetch_array()) {
        $rowspro[] = $rowpr;
    }if(!$res11){
        $rowspro = "no hay clientes en la tabla";
    }
/*consulta 12*/
    if (isset($_GET['idprod'])) {
        $id_productos = (int) $_GET['idprod'];
        $query12 = "SELECT * FROM tb_productos where id = $id_productos LIMIT 1";
        $resultado12 = $conexion->query($query12);
        $filasprod = $resultado12->fetch_assoc();
    } else {
        $id_productos = 0;
    }
    /*consulta 13*/
    if (isset($_GET['idprd'])) {
        $id_productos = (int) $_GET['idprd'];
        $query13 = "DELETE  FROM tb_productos where id = $id_productos LIMIT 1";
        $resultado13 = $conexion->query($query13);
    }else{
        $id_productos = 0;
    }

    if (!$resultado || !$res || !$res2) {
        echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
    }
}
function mostrarHtml3()
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
                                &nbsp;&nbsp;Usted no ha iniciado sesión, por favor, inicie.!
                            </div>
                        </div>
                    <div>
                    </body>
                </html>";
    echo 'Redirigiendo en 3 segundos, si no, <a href="Login.php">Clic aquí</a> para ir al login.';
}
