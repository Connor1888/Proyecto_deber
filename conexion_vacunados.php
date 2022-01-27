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
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$edad=$_POST['edad'];
$numdosis=$_POST['num_dosis'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexion");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");
$insertar=" insert into datos_vacunados values('$codigo','$cedula','$nombre','$ciudad','$edad','$numdosis')";
$resultado=mysqli_query($conexion,$insertar) or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("Los datos se han grabado exitosamente");
?>
<br>
<input type="button" onclick="location.href='formulario.php';" value="Inicio" />
</body>
</html>