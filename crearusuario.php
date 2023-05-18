<!doctype html>
<html>

<head>
<link rel="stylesheet" href="papeleria.css">
   
</head>

<body>
<center><h1>CREAR USUARIO</h1>
<br>
<br>
<form method='post' action='crearusuario.php' >
Introduce nombre usuario
<input type='text' name='usuario'>
<br>

Introduce password
<input type='password' name='password'>
<br>
<br>
<input type="submit" value="crear usuario">
</form>


<?php



if($_POST)
{
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$conexion=mysqli_connect("localhost","root","","papeleria");
$consulta="CREATE USER '$usuario'@'localhost' IDENTIFIED BY '$password'";


$consulta2="GRANT ALL PRIVILEGES ON *.* TO '$usuario'@'localhost'";
$resultado=mysqli_query($conexion,$consulta);
$resultado2=mysqli_query($conexion,$consulta2);

echo("Se ha creado el usuario: " .$usuario. " correctamente.");
echo("<br>Se han concedido los privilegios de forma correcta al usuario: " .$usuario);

$consulta3="INSERT INTO USUARIOS VALUES('$usuario','$password')";
$resultado3=mysqli_query($conexion,$consulta3);


if($conexion)
{
//header("location:index.php?usuario=$usuario");

header("location:index.php");

}

//if($filas<=0)
else
    {
    echo("El usuario no existe");
    }


}
?>


<br>
<a href='login.php'>Login</a>

</body>

</html>




