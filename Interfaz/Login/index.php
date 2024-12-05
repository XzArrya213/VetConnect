<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="info">

        

            <h2>Animal Support</h2>
            <hr>
            
            <p class="txt-2">soluciones, información o servicios relacionados con el cuidado animal.
            </p>
        </div>

        <form class="form">

            <h2>VetConnect</h2>

            <p>
                INICIA SESION O REGISTRATE
            </p>
            <div class="inputs">
                <form action="conexion/validar.php" method="post"></form>

                <input type="email" class="box" placeholder="Ingresa un correo">
                <input type="Password" class="box" placeholder="Ingrese una contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>

                
                
           
            <div class="submit">
                <a id="btnIrOtroArchivo"> <div class="txt-3">Iniciar Sesion</div></a>
                
                <?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "
    <p class='error'>Error en la autenticación</p>
    ";
}

if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "
    <p class='sesion'>Sesión cerrada correctamente</p>
    ";
}
?>

                <script src="ruta.js"></script>
            </div>
            </div>
        </form>
    </div>
    <div class="resolucion">
        <div class="hp">
            
        </div>
        <div class="tablet">
            
        </div>
        <div class="movil">
            
        </div>
    </div>
</body>

</html>

<style>
    </style>