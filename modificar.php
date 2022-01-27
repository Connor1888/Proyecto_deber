<!DOCTYPE html>
<html>
<head>
    <title>Actualizado</title>
</head>
<link rel="stylesheet" type = "text/css" href="fondo.css">
</head>
<body>
<style>
    body{
        color:white;
    }
</style>

    <?php
$servidor = "localhost";
$usuario = "maicol3";
$clave = "12345";
$base = "vacunas";

$conexion = mysqli_connect($servidor,$usuario,$clave,$base) or die ("error en la conexion");


if($_SERVER['REQUEST_METHOD']=='POST'){
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];

$string1 = strval($codigo);

$sql="UPDATE datos_vacunados SET datos_vacunados.nombre='$nombre' WHERE datos_vacunados.codigo='$string1'";

if(mysqli_query($conexion,$sql)){  
    echo "Los datos se han actualizado exitosamente";
  }
mysqli_close($conexion);
 }
 else{
 echo "Error";
 }
?>
<br>
<input type="button" onclick="location.href='formulario.php';" value="Inicio" />
</body>
</html>