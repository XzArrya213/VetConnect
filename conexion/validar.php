<?php

$email = $_POST['correo'];
$constraseña = $_POST['contraseña'];
session_start();
$_SESSION['email']=$email;

include('db.php');

$consulta = "SELECT * FROM usuarios WHERE correo='$email' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysql_num_rows($resultado);

if($filas){
header("Location: ./../home.php");
} else{
    header("Location: ./../index.php?error=1");
}

mysqli_free_result($resultado);
mysqli_close($conexion);