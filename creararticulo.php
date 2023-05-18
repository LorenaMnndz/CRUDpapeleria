<!doctype html>

<html>
<head>
<link rel="stylesheet" href="papeleria.css">
   


</head>
<body>
<center><h1>Insertar articulo</h1>
<br>
<br>



<center><?php


echo("<form method='post' action='creararticulo.php'>");
echo("<input type='hidden' name='codigo'><br>");
echo('Introduce nombre:');
echo("<input type='text' name='nombre'><br>");
echo('Introduce precio:');
echo("<input type='text' name='precio'><br>");
echo('Introduce unidades:');
echo("<input type='text' name='unidades'><br>");
echo('Introduce foto:');
echo("<input type='text' name='foto'><br>");
echo('Seleccione categoría');
echo("<select name='lista1'>");
echo("<option value='seleccione'></option>");

$conexion=mysqli_connect("localhost","root","","papeleria");
$consulta="SELECT nombre FROM categorias";
$resultado=mysqli_query($conexion,$consulta);



while($filas=mysqli_fetch_row($resultado))
{
echo("<option value='$filas[0]'>".$filas[0]."</option>");
}
echo("</select>");


echo("<input type='submit' value='Insertar articulo'>");
echo("</form>");

if($_POST)
{
$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$precio=$_POST['precio'];
$unidades=$_POST['unidades'];
$foto=$_POST['foto'];
$lista1=$_POST['lista1'];

$consulta2="SELECT codigocat FROM categorias WHERE NOMBRE='$lista1'";
$resultado2=mysqli_query($conexion,$consulta2);

while($filas2=mysqli_fetch_row($resultado2))
{
    $datob[0]=$filas2[0];


}



$consulta3="INSERT INTO articulos VALUES('$codigo','$nombre','$precio',$unidades,'$foto','$datob[0]')";
$resultado3=mysqli_query($conexion,$consulta3);



echo("Se ha insertado el registro");

}

?>
<a href='index.php'>Inicio</a>



</body>

</html>

