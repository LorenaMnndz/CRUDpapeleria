<!doctype html>
<html>
<head>
<link rel="stylesheet" href="papeleria.css">
   
</head>

<body>

<center><?php

echo("<h1>ACTUALIZAR ARTÍCULO</h1>");
echo("<form method='post' action='actualizararticulo.php'>");
echo("Seleccione nombre del artículo a modificar:");
echo("<select name='lista1'>");
echo("<option value='seleccione'>Seleccione</option>");


$conexion=mysqli_connect("localhost","root","","papeleria");

$consulta="SELECT nombre FROM articulos";

$resultado=mysqli_query($conexion,$consulta);

while($filas=mysqli_fetch_row($resultado))
{
echo("<option value='$filas[0]'>".$filas[0]."</option>");
}
echo("</select>");
echo("<hr>");


echo("<br><input type='hidden' name='codigo'>");

echo("<br>Introduce el nuevo nombre");
echo("<br><input type='text' name='nombren'>");

echo("<br>Introduce las nuevas unidades");
echo("<br><input type='number' name='unidades'>");

echo("<br>Introduce el nuevo precio");
echo("<br><input type='text' name='precio'>");

echo("<br>Introduce la nueva foto");
echo("<br><input type='file' name='foto'>");

echo("<br>Seleccione categoría");
echo("<select name='lista2'>");
echo("<option value='seleccione'></option>");

$consulta2="SELECT nombre FROM categorias";
$resultado2=mysqli_query($conexion,$consulta2);

while($filas2=mysqli_fetch_row($resultado2))
{
echo("<option value='$filas2[0]'>".$filas2[0]."</option>");
}
echo("</select>");

echo("<input type='submit' value='Actualizar datos'>");
echo("</form>");



if($_POST)
{
$nombre=$_POST['lista1'];
$nombre=$_POST['nombren'];
$codigo=$_POST['codigo'];
$precio=$_POST['precio'];
$unidades=$_POST['unidades'];
$foto=$_POST['foto'];
$categoria=$_POST['lista2'];


$consulta5="SELECT nombre FROM categorias where nombre='$categoria'";
$resultado5=mysqli_query($conexion,$consulta5);
while($filas5=mysqli_fetch_row($resultado5))
{
$datos[0]=$filas5[0];

}

$consulta4="UPDATE articulos set nombre='$nombre',codigo='$codigo',unidades=$unidades,precio='$precio',foto='$foto',codigocat='$datos[0]' WHERE nombre='$nombre'";

$resultado4=mysqli_query($conexion,$consulta4);

echo("Se ha actualizado el registro correctamente");

}

?>
<a href='index.php'>Inicio</a>

</body>
</html>