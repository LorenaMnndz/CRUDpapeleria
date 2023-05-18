<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="papeleria.css">
   
</head>


<body>
<center><?php

echo("<h1>ACTUALIZAR CATEGORÍA</h1>");
echo("<form method='post' action='actualizarcategoria.php'>");
echo("Introduce el nombre de la categoría a modificar:");
echo("<select name='lista'>");
echo("<option value='seleccione'>Seleccione</option>");

$conexion=mysqli_connect("localhost","root","","papeleria");
$consulta1="Select nombre from categorias";
$resultado1=mysqli_query($conexion,$consulta1);

while($filas=mysqli_fetch_row($resultado1))
{
echo("<option value='$filas[0]'>".$filas[0]."</option>");
}
echo("</select>");




echo("<hr><br>");
echo("Introduce nombre nuevo:");
echo("<input type='text' name='nombren'><br>");
//echo("Código");
//echo("<input type='number' name='codigocat' disabled><br>");
echo("Introduce nueva descripción:");
echo("<input type='text' name='descripcion'><br>");
echo("<input type='submit' value='Modificar categorias'>");



if($_POST)
{
$nombre=$_POST['nombren'];
//$codigocat=$_POST['codigocat'];
$descripcion=$_POST['descripcion'];
$lista=$_POST['lista'];
//$consulta2="UPDATE categorias set nombre='$nombre',codigocat='$codigocat',descripcion='$descripcion' WHERE NOMBRE='$lista'";
$consulta2="UPDATE categorias set nombre='$nombre',descripcion='$descripcion' WHERE NOMBRE='$lista'";

$resultado2=mysqli_query($conexion,$consulta2);


}



?>
<a href='index.php'>Inicio</a>



</body>


</html>