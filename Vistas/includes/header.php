
<nav class="navbar navbar-expand navbar-light text-white topbar mb-4 static-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="ModuloAdministrador.php">Bienvenido,
            <?php
            echo $filas['nombre'];
            echo " ";
            echo $filas['apellidos'];
            ?>
        </a>
        <a class="navbar-brand" href="../Variables/CerrarConexion.php">Cerrar sesión</a>
    </div>
</nav>