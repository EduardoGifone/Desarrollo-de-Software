<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE cod_usuario='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link rel="stylesheet" href="style_actualizar.css">
    </head>
    <body>
        <div class="container">
            <form class="form" action="update.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" class="form__input" name="cod_usuario" value="<?php echo $row['cod_usuario']  ?>">
                        <label for="password" class="form__label">Password</label>
                        <input type="text" class="form__input" name="password" placeholder="Ingrese password" value="<?php echo $row['password']  ?>">
                        <label for="correo_electronico" class="form__label">Correo Electronico</label>
                        <input type="text" class="form__input" name="correo_electronico" placeholder="Ingrese Correo Electronico" value="<?php echo $row['correo_electronico']  ?>">
                        <label for="imagen" class="form__label">Imagen</label>
                        <input type="file" class="form__input" name="imagen" value="<?php echo $row['imagen']  ?>">

                    <input type="submit" class="form__input__button" value="Actualizar">
            </form>

        </div>
    </body>
</html>