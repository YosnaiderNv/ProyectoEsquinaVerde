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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="../Css/style.css?v=1" />
    <link rel="shortcut icon" href="../Imagenes/IconWeb.jpg" />

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <title>Crear Usuario TV</title>
</head>

<body class="bg-dark">
    <section>
        <div class="mx-auto col-auto p-5" style="width: 50%;">
            <div class="px-lg-2 pt-lg-2 pb-lg-2 p-4 mb-auto w-100">
                <a href="index.php"><img src="../Imagenes/IconWeb.jpg" class="img-fluid" /></a>
            </div>
            <div class="align-self-center w-100 px-lg-8 py-lg-7 p-7">
                <h1 class="font-weight-bold mb-4">Registro de Productos</h1>
                <form class="mb-3" method="POST" action="../Variables/V_productos.php" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="exNombre" class="form-label font-weight-bold">Nombre:</label>
                        <input type="text" class="form-control bg-teal-x border-0" id="exNombre" placeholder="Ingresar nombre" name="nombre"  required="" />
                    </div>
                    <div class="mb-4">
                        <label for="exApr" class="form-label font-weight-bold">Valor:</label>
                        <input type="text" class="form-control bg-teal-x border-0" id="exApr" placeholder="Ingresar el valor" name="valor" required="" />
                    </div>
                    
                     <div class="mb-4">
                        <label for="exID" class="form-label font-weight-bold">Codigo:</label>
                        <input type="text" class="form-control bg-teal-x border-0" id="exID" placeholder="Ingresa Codigo" name="codigo" pattern="[0-9]+" oninvalid="setCustomValidity('Solo números por favor.')" required="" />
                    </div>
                    <div class="mb-4">
                        <label for="exCE" class="form-label font-weight-bold">Fecha:</label>
                        <input type="text" class="form-control bg-teal-x border-0" id="exCE" placeholder="Ingresar fecha" name="fecha" required="" />
                    </div>
                    
                   <div class="mb-4">
                        <label for="exIN" class="form-label font-weight-bold">Descripcion:</label>
                        <input type="text" class="form-control bg-teal-x border-0" id="exIN" placeholder="ingresar descripcion" name="descripcion" required="" />
                    </div>  
                   <div class="mb-4">
                                <label for="codimg" class="form-label font-weight-bold">Imagen del producto:</label>
                                <input type="file" class="form-control bg-light-s border-1" name="ruta" required="" />
                   </div>
                   
                    
                    <button type="submit" name="enviar" class="btn btn-primary w-100" id="enviar">Guardar</button>
                    
                </form>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                    <p class="d-inline-block mb-0">¿Ya tienes una cuenta?</p><a href="Login.php" class="text-light font-weight-bold text-decoration-none">Inicia sesión</a>
                </div>
                <div class="text-center px-lg-4 pt-lg-2 pb-lg-2 p-2 mt-auto w-100">
                    <p class="d-inline-block mb-0">¿Necesitas ayuda?</p>
                    <a href="" class="ayuda-btn">Ayuda</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>