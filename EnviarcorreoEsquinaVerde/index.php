<?php
if (isset($_GET['c'])) {
	if ($_GET['c'] == 's') {
		echo '
                <div class="alert alert-success" role="alert">
                    <strong>El correo se envió con éxito!</strong>
                </div>
                ';
	} elseif ($_GET['c'] == 'e') {
		echo '
                <div class="alert alert-danger" role="alert">
                    <strong>El correo NO se envió!</strong>
                </div>
                ';
	}
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Css/estilos-index.css?v=1" />
    <link rel="stylesheet" type="text/css" href="../Css/style1.css">
	<link rel="stylesheet" type="text/css" media="screen" href="../Css/main.css" />
	<title>Contactanos</title>
</head>

<body>
<header>
        <nav class="nav-bar-index">
            <div class="contenedor-botones">
                <div class="contenedor-imagentexto">
                    <img src="../Imagenes/IconWeb.jpg" alt="Icono de la empresa">
										<div>
											<br>
											
											<span class="navbar-brand" href="#">Bienvenido(a) a nuestra sección de ayuda.</span>
										</div>
                </div>
               <?php 
                include_once '../Vistas/includes/btn.html'; 
                ?>
            </div>
        </nav>
    </header>
		<br><br>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
			<div class="container-fluid">
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					
					</ul>
				</div>
			</div>
		</nav>
		<hr>
		<form class="row g-3 needs-validation" method="POST" action="Logica.php" novalidate>
			<div class="col-md-5">
				<label for="txtNombres" class="form-label">Nombre:</label>
				<input type="text" class="form-control" name="txtNombres" id="txtNombres" placeholder="Ingresa tu nombre." required />
				<div class="invalid-feedback">El nombre es obligatorio!</div>
			</div>
			<div class="col-md-7">
				<label for="txtCorreo" class="form-label">Correo:</label>
				<div class="input-group has-validation">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
					<input type="text" class="form-control" name="txtCorreo" id="txtCorreo" aria-describedby="inputGroupPrepend" placeholder="Ingresa tu correo." required />
					<div class="invalid-feedback">El correo es obligatorio!.</div>
				</div>
			</div>
			<div class="form-floating">
				<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="txtBody" required></textarea>
				<label for="floatingTextarea2">Commentario</label>
			</div>
			<div class="col-12">
				<button class="btn btn-primary" name="s" type="submit">Enviar datos.</button>
			</div>
		</form>
	</div>
	<script src="./funciones.js" type="text/javascript"></script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<br>
<br>
<br>
<br><br><br><br>
</body>
<footer>
    <p>TODOS LOS DERECHOS RESERVADOS 2022</p>
    <p class="j">TIENDA LA ESQUINA VERDE</p>
    <p class="j">CONTACTANOS: 3234528900 - 3014356578</p>
</footer>
</html>