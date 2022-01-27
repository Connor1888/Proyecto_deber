<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type = "text/css" href="fondo.css">
</head>
<body>
<style>
    body{
        color:white;
    }
</style>

<?php
$servidor="localhost";
$usuario="maicol3";
$clave="12345";
$base="vacunas";
$tabla="datos_vacunados";



$codigo=$_POST['codigo'];
$conexion= mysqli_connect($servidor, $usuario, $clave) or die ("Error en la conexion");
$bases=mysqli_select_db($conexion, $base) or die ("error en la conxion");

mysqli_query($conexion, "DELETE FROM datos_vacunados WHERE codigo='$codigo'") or die("Error al conectar con la base de datos");

mysqli_close($conexion);
echo("Los datos se han eliminado exitosamente");
?>
<br>
<input type="button" onclick="location.href='formulario.php';" value="Inicio" />
</body>
</html>