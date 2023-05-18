<!doctype html>
<html>

<head>
<link rel="stylesheet" href="papeleria.css">
   

</head>

<body style='text-align: center;'>
<h1>LOGIN</h1>
<br>
<br>
<form method='post' action='login.php'>
Introduce nombre usuario
<input type='text' name='usuario'>
<br>

Introduce password
<input type='password' name='password'>
<br>
<br>
<input type="submit" value="Login">



<?php
if($_POST) {
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    $conexion=mysqli_connect("localhost","root","","papeleria");
    $consulta="SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $resultado1=mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado1);

    if($filas==0) {
        echo("<br>");
        //echo("El usuario no existe");redirige directamente a crearusuario.php
        //header("location:crearusuario.php?usuario");
        header("location:crearusuario.php");
    } else {
        setcookie("usuario","$usuario",time()+(60*60*20*30));
        setcookie("password","$password",time()+(60*60*20*30));
        header("location:index.php");
    }
}
?>
</form>
</body>

</html>




