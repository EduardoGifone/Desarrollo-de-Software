<?php
include("conexion.php");
$con=conectar();

$cod_usuario=$_POST['cod_usuario'];
$password=$_POST['password'];
$correo_electronico=$_POST['correo_electronico'];
$imagen=$_POST['imagen'];


$sql="INSERT INTO usuario VALUES('$cod_usuario','$password','$correo_electronico','$imagen')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>