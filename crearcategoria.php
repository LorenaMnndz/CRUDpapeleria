<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="papeleria.css">
   

</head>

<body>

    <form method="post" action="crearcategoria.php">
        <div>
            
                <h1  align='center'>CREAR CATEGORÍA</h1><br>
        
                    <center>Introduce nombre de la categoría
                    <input type="text" name="nombre" placeholder="Nombre"><br>

                    Introduce descripción 
                    <input type="text" name="descripcion" placeholder="Descripción"><br>
                    
                    <input type="hidden" name="codigocat" placeholder="Código"><br>
                </div>
                <center><button type="submit" >Alta categoría</button>
        </div><br>
    
    </form>
    <?php

if($_POST)
{
$nombre=$_POST['nombre'];
$codigocat=$_POST['codigocat'];
$descripcion=$_POST['descripcion'];

$conexion=mysqli_connect("localhost","root","","papeleria");

$consulta="INSERT INTO categorias VALUES('$codigocat','$nombre','$descripcion')";

$resultado=mysqli_query($conexion,$consulta);

echo("La categoría se ha almacenado correctamente");
}


?>
<a href='index.php'>Inicio</a>

</body>
</html>















