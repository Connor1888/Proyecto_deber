<?php
$conexion=mysqli_connect('localhost','maicol3','12345','vacunas'); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Datos de Vacunados</title>
    <link rel="stylesheet" type = "text/css" href="fondo.css">
</head>
<body>
<style>
    body{
        color:white;
    }
</style>
<br>
    <table border="1"> 
<tr>
            <td>CODIGO</td>
            <td>CEDULA</td>
            <td>NOMBRE</td>
            <td>CIUDAD</td>
            <td>EDAD</td>
            <td>NUMERO DE DOSIS</td>
</tr>

<?php
$sql="SELECT * from datos_vacunados";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)) {
    ?>

<tr>
    <td><?php echo $mostrar['codigo'] ?></td>
    <td><?php echo $mostrar['cedula'] ?></td>
    <td><?php echo $mostrar['nombre'] ?></td>
    <td><?php echo $mostrar['ciudad'] ?></td>
    <td><?php echo $mostrar['edad'] ?></td> 
    <td><?php echo $mostrar['num_dosis'] ?></td>
    </tr>
<?php
}
    ?>
    </table>
    <input type="button" onclick="location.href='formulario.php';" value="Inicio" />
</body>
</html>