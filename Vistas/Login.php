<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../Css/style.css?v=1" />
  <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../Css/estilos-index.css?v=1" />
    <link rel="stylesheet" type="text/css" href="../Css/style1.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../Css/main.css" />
  <title>Login TV</title>
</head>

<body class="bg-dark">
<header>
        <nav class="nav-bar-index">
            <div class="contenedor-botones">
                <div class="contenedor-imagentexto">
                    <img src="../Imagenes/IconWeb.jpg" alt="Icono de la empresa">
                    
                </div>
                <?php 
                include_once './includes/btn.html'; 
                ?>
            </div>
        </nav>
    </header>
                   
               
          
  <main>
    <section>
      <div class="mx-auto col-auto p-5" style="width: 50%;">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100">
       <!--   <a href="index.php"><img src="../Imagenes/IconWeb.jpg" class="img-fluid" /></a> -->
        </div>
        <div class="align-self-center w-100 px-lg-8 py-lg-7 p-7">
          <h1 class="font-weight-bold mb-4">Bienvenido al Login</h1>
          <form class="mb-3" method="POST" action="../Variables/V_login.php">
            <div class="mb-4">
              <label for="ide" class="form-label font-weight-bold">Número de identificación:</label>
              <input type="number" class="form-control bg-teal-x border-0" id="ide" placeholder="Ingresa Nº de identificación" name="identif" pattern="[0-9]+" oninvalid="setCustomValidity('Solo números por favor.')" required="" />
            </div>
            <div class="mb-4">
              <label for="pass" class="form-label font-weight-bold">Contraseña</label>
              <input type="password" class="form-control bg-teal-x border-0 mb-2" placeholder="Ingresa tu contraseña" id="pass" name="contra" required="" />
              <a href="" id="emailHelp" class="form-text text-muted text-decoration-none">
                <font size="3px">¿Has olvidado tu contraseña?</font>
              </a>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary w-100">Iniciar sesión</button>
          </form>
          <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
            <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p> <a href="CrearAdmin.php" class="text-light font-weight-bold text-decoration-none">Crea una ahora</a>
          </div>
          <div class="text-center px-lg-4 pt-lg-2 pb-lg-2 p-2 mt-auto w-100">
            <p class="d-inline-block mb-0">¿Necesitas ayuda?</p>
            <a href="../EnviarcorreoEsquinaVerde/index.php" class="ayuda-btn">Ayuda</a>
          </div>
        </div>
      </div>

    </section>
  </main>
  <footer>
  </footer>
  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
<footer>
    <p>TODOS LOS DERECHOS RESERVADOS 2022</p>
    <p class="j">TIENDA LA ESQUINA VERDE</p>
    <p class="j">CONTACTANOS: 3234528900 - 3014356578</p>
</footer>
</html>