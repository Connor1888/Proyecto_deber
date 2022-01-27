<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!------------>
    <title>Menú</title>

    <link rel="stylesheet" type = "text/css" href="Estilos.css">
    <link rel="stylesheet" type = "text/css" href="fondo.css">
      
</head>
<body bgcolor="celeste">
<font face="𝐋𝐋𝐄𝐍𝐄 𝐋𝐎𝐒 𝐒𝐈𝐆𝐔𝐈𝐄𝐍𝐓𝐄𝐒 𝐃𝐀𝐓𝐎𝐒">
    <header>
        <input type="checkbox" id="btn_menu">
        <label for="btn_menu">
            <img src="boton_menu.png" alt="">
        </label>
<nav class="menu">
    <ul>
        <li><a  href="#Inicio">LLENE LOS SIGUIENTES DATOS</a></li>
        <li><a  href="#Eliminar">ELIMINAR</a></li>
        <li><a  href="#MODIFICAR">MODIFICAR</a></li>
        <li><a  href="#TABLA">TABLA</a></li>
        <li><a  href="#CONTACTOS">CONTACTOS</a></li>
        <li><a  href="#VOLVER_INICIO" button onclick="location.href=' menu_de busqueda.php '">VOLVER INICIO</a></li>
      </form>
    </ul>
</nav>
</header>
<!--INICIO-->

<a name="Inicio"> </a>

<form action="conexion_vacunados.php" method="POST">
<center><font face="𝐋𝐋𝐄𝐍𝐄 𝐋𝐎𝐒 𝐒𝐈𝐆𝐔𝐈𝐄𝐍𝐓𝐄𝐒 𝐃𝐀𝐓𝐎𝐒"><h1>LLENE LOS SIGUIENTES DATOS</h1></center>
<style>
body {
	color: white;
}
</style>

<img src="formu.png" align="right">
<p> CODIGO</p>
<input type="text" name="codigo">
<br>
<p> CEDULA</p>
<input type="text" name="cedula">
<br>
<p> NOMBRE</p>
<input type="text" name="nombre">
<br>
<p> CIUDAD</p>
<input type="text" name="ciudad">
<br>
<p> EDAD</p>
<input type="text" name="edad">
<br>
<p> NUMERO DE DOSIS</p>
<input type="text" name="num_dosis">
<br>
<input type= "submit" name="action" value="Guardar">
</form>
<!--Eliminacion de datos-->
<a name="Eliminar"> </a>
<img src="elimi.png" align="right">
<h1>Eliminar</h1>
<p>BUSCAR CODIGO QUE DESEA ELIMINAR</p>
<form action ="eliminar_vacu.php" method="POST">
 <input type= "text" name="codigo">
<input type= "submit" name="btneliminar" value="Eliminar">
<br>
</form>
<!--MODIFICAR-->
<a name="MODIFICAR"> </a>
<h1>MODIFICAR</h1>
<img src="modi.png" align="right">
<p>Modificar los datos</p>
<form action ="modificar.php" method="POST">
 CODIGO: 
 <br>
 <input type="text" name="codigo">
 <br>
 NOMBRE: 
 <br>
 <input type="text" name="nombre">
<br>
<input type= "submit" name="btn_modificar" value="modificar">
 </form>

<!--TABLA-->

<a name="TABLA"> </a>
<h1>TABLA</h1>
<img src="tab.png" align="right">
<p>TABLA DE TODOS LOS BACUNADOS</p>
<form action ="tabla_vacunados.php" method="POST">
<input type= "submit" name="btntabla" value="Mostrar Tabla">
</form>
<br>
<br>
<!--Video-->

<script src="videoplayback.mp4" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<!--CONTACTOS-->

<a name="CONTACTOS"> </a>
<h1>CONTACTOS</h1>
MI CORREO ELCTRONICO ES: maicolgallito68@gmail.com
<br>
<br>
MI NUMERO DE CELULAR ES: 0995410505
<br>
<br>
MI WHATSAPP ES: https://wa.link/y2x6mh
<br>
<center><video width=320  height=240 controls poster="vistaprevia.jpg">
            <source src="videoplayback.mp4" type="video/mp4">
              </video><br></center>
<!-- Contador de visitas -->
<center><img style="border: 0px solid; display: inline;" alt="contador de visitas" src="http://www.websmultimedia.com/contador-de-visitas.php?id=301657"></a><br><a href='http://www.websmultimedia.com/contador-de-visitas-gratis'></center>
<!-- Fin Contador de visitas -->
</body>
</html>