<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />
    <link rel="stylesheet" href="../Css/estilos-index.css?v=1" />
    <link rel="stylesheet" type="text/css" href="../Css/style1.css">
<link rel="stylesheet" type="text/css" media="screen" href="../Css/main.css" />
    <title>Inicio TV</title>
</head>

<body>

    <header>
        <nav class="nav-bar-index">
            <div class="contenedor-botones">
                <div class="contenedor-imagentexto">
                    <img src="../Imagenes/IconWeb.jpg" alt="Icono de la empresa">
                </div>
                <?php 
                include_once './includes/botones.html'; 
                ?>
            </div>
        </nav>
    </header>
    <main>
   <!-- <h1 class="title"> Lista de productos <h1> -->
    <div class="container"> 
    <?php
    include('../Variables/Conexion.php');
       $query= "SELECT * FROM tb_productos";
       $resultado = $conexion->query($query);
       while ($row= $resultado->fetch_assoc()){
        ?>
       <div class="card">  
           <img src="<?php echo ($row['ruta']); ?>">
           <h4><?php echo $row ['nombre'];  ?></h4>
           <p><?php echo $row ['valor'];  ?></p>
           <a href="#" ><u> <H6>comprar</H6></u></a>
       </div>
     <?php 
       }
    ?>
      
    </div>


 


    
    </main>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<footer>
    <p>TODOS LOS DERECHOS RESERVADOS 2022</p>
    <p class="j">TIENDA LA ESQUINA VERDE</p>
    <p class="j">CONTACTANOS: 3234528900 - 3014356578</p>
</footer>
</html>