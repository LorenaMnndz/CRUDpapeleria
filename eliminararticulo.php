<!doctype html>
<html>
<head>
<link rel="stylesheet" href="papeleria.css">
   

</head>

<body>
<center><h1>BORRAR ARTÍCULO</h1>
<br>
<br>
<center><?php
echo("<form method='post' action='eliminararticulo.php'>");
echo("Seleccione artículo a eliminar");
echo("<select name='lista'>");
echo("<option value='seleccione'>Seleccione</option>");


$conexion=mysqli_connect("localhost","root","","papeleria");
$consulta="SELECT nombre FROM articulos";

$resultado=mysqli_query($conexion,$consulta);

while($filas=mysqli_fetch_row($resultado))
{
echo("<option name='$filas[0]'>".$filas[0]."</option>");
}

echo("<input type='submit' value='borrar datos'");
echo("</select>");
echo("</form>");

if($_POST)
{
$valor=$_POST['lista'];



$consulta2="DELETE FROM articulos WHERE nombre like '$valor'";
$resultado2=mysqli_query($conexion,$consulta2);

$consulta3="SELECT * FROM articulos";
$resultado3=mysqli_query($conexion,$consulta3);




}




?>

<a href='index.php'>Inicio</a>


</body>

</html>