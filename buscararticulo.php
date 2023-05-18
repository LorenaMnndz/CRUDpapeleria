<!doctype html>

<html>

<head>
<link rel="stylesheet" href="papeleria.css">
   

</head>



<body>

<center><h1>BUSCAR ARTICULO</h1>

<form method="post" action="buscararticulo.php">
Introduce el nombre del artículo
<input type="text" name="nombre">
<br>
<input type="submit" value="buscar">

</form>

<center><?php
if($_POST)
{
$nombre=$_POST['nombre'];

$conexion=mysqli_connect("localhost","root","","papeleria");

$consulta="SELECT * FROM articulos WHERE nombre like '$nombre'";

$resultado=mysqli_query($conexion,$consulta);

echo("<table border=1>");
echo("<tr><td>Código</td>");
echo("<td>Nombre</td>");
echo("<td>Unidades</td>");
echo("<td>Precio</td>");
echo("<td>Foto</td>");
echo("<td>Codigocat</td></tr>");

while($filas=mysqli_fetch_row($resultado))
{
echo("<tr><td>".$filas[0]."</td><td>".$filas[1]."</td><td>".$filas[2]."</td><td>".$filas[3]."</td><td>".$filas[4]."</td><td>".$filas[5]."</td></tr>");
}

echo("</table>");



}

?>
<a href='index.php'>Inicio</a>


</body>



</html>