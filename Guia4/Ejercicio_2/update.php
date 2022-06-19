<?php

include("conexion.php");
$con=conectar();

$cod_usuario=$_POST['cod_usuario'];
$password=$_POST['password'];
$correo_electronico=$_POST['correo_electronico'];
$imagen=$_POST['imagen'];

$sql="UPDATE usuario SET  password='$password',correo_electronico='$correo_electronico',imagen='$imagen' WHERE cod_usuario='$cod_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>