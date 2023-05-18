<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="papeleria.css">
   
</head>

<body><br><br><br>
    <center><h1>BORRAR CATEGORÍA</h1>

   <form method="post" action="eliminarcategoria.php">
        <div>
            
                
        
                    
                    
                    <input type="hidden" name="nombre" placeholder="Nombre"><br>

                    
                    <input type="hidden" name="descripcion" placeholder="Descripción"><br>
                    
                    <input type="hidden" name="codigocat" placeholder="Código"><br>
                </div>
                
        </div><br>
</form>
    <?php
    echo("<form method='post' action='eliminarcategoria.php'>");
    echo("Seleccione categoría a eliminar");
    echo("<select name='lista'>");
    
    $conexion=mysqli_connect("localhost","root","","papeleria");
    $consulta="SELECT nombre FROM categorias";
    
    $resultado=mysqli_query($conexion,$consulta);
    
    while($filas=mysqli_fetch_row($resultado))
    {
    echo("<option name='$filas[0]'>".$filas[0]."</option>");
    }
echo("</select>");
    echo("<input type='submit' value='Borrar categoría'>");
    

if($_POST)
{
   
$dato=$_POST['lista'];
$conexion=mysqli_connect("localhost","root","","papeleria");
$consulta2="DELETE FROM categorias WHERE nombre LIKE '$dato'";

$resultado2=mysqli_query($conexion,$consulta2);
$consulta3="SELECT nombre FROM categorias";
    $resultado3=mysqli_query($conexion,$consulta3);
 

while($filas1=mysqli_fetch_row($resultado3))
{
echo("<option name='$filas1[0]'>".$filas1[0]."</option>");
}
echo("</select>");
echo("La categoría ha sido eliminada");
}
?>
<a href='index.php'>Inicio</a>

</body>
</html>















