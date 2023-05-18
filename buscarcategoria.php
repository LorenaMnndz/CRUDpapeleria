<!doctype html>

<html>

<head>
<link rel="stylesheet" href="papeleria.css">
   

</head>



<body>

<center><h1>BUSCAR CATEGORÍA</h1>

<center><form method="post" action="buscarcategoria.php">
Introduce el nombre de la categoría
<input type="text" name="nombre">
<br>
<input type="submit" value="buscar">



<?php
if($_POST)
{
$nombre=$_POST['nombre'];

$conexion=mysqli_connect("localhost","root","","papeleria");

$consulta="SELECT * FROM categorias WHERE nombre like '$nombre'";

$resultado=mysqli_query($conexion,$consulta);

echo("<table border=1>");
echo("<tr><td>Codigocat</td>");
echo("<td>Nombre</td>");
echo("<td>Descripción</td></tr>");



while($filas=mysqli_fetch_row($resultado))
{
echo("<tr><td>".$filas[0]."</td><td>".$filas[1]."</td><td>".$filas[2]."</td></tr>");
}

echo("</table>");



}

?>
</form>
<a href='index.php'>Inicio</a>


</body>



</html>