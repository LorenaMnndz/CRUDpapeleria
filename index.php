<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="papeleria.css">
   
</head>
<body>
    

   

<?php
//error_reporting(0);
//$usuario=$_GET['usuario'];
$usuario=$_COOKIE['usuario'];
$password=$_COOKIE['password'];

$conexion=mysqli_connect("localhost","root","","papeleria");
$consulta="SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$resultado1=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado1);

if($filas!=0){
    echo ("<h1 align='center'> Bienvenid@ a tu papelería"." ".$usuario ."</h1>");
    echo("<br><br>");
    
    echo("<table width='600' border='1' align='center'>");
    echo("<tr><td><a href='crearcategoria.php'>Crear categoría</a></td>");
    echo("<td><a href='buscarcategoria.php'>Buscar categoría</a></td>");
    echo("<td><a href='actualizarcategoria.php'>Actualizar categoría</a></td>");
    echo("<td><a href='eliminarcategoria.php'>Borrar categoría</a></td></tr>");
    
    echo("<tr><td><a href='creararticulo.php'>Crear artículo</a></td>");
    echo("<td><a href='buscararticulo.php'>Buscar artículo</a></td>");
    echo("<td><a href='actualizararticulo.php'>Actualizar artículo</a></td>");
    echo("<td><a href='eliminararticulo.php'>Borrar artículo</a></td></tr>");
    
    echo("</table>");

    echo("<center><button onclick='logout()'>Log out</button>");

} else {
    header("location:crearusuario.php");
}

?>

<script>
function logout() {
    document.cookie = "usuario=''; expires= Thu, 21 Aug 2014 20:00:00 UTC";
    document.cookie = "password=''; expires= Thu, 21 Aug 2014 20:00:00 UTC";
    //document.cookie = "PHPSESSID=''; expires= Thu, 21 Aug 2014 20:00:00 UTC";
    location.href ="login.php";
}
</script>

</body>
</html>