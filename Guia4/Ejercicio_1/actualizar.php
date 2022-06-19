<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM asignatura WHERE cod_asignatura='$id'";
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
            <form class="form" action="update.php" method="GET">

                        <input type="hidden" class="form__input" name="cod_asignatura" value="<?php echo $row['cod_asignatura']  ?>">
                        <label for="nombre" class="form__label">Nombre</label>
                        <input type="text" class="form__input" name="nombre" placeholder="Ingrese nombre" value="<?php echo $row['nombre']  ?>">
                        <label for="creditos" class="form__label">Creditos</label>
                        <input type="text" class="form__input" name="creditos" placeholder="Ingrese numero de creditos" value="<?php echo $row['creditos']  ?>">
                        <label for="categoria" class="form__label">Categoria</label>
                        <input type="text" class="form__input" name="categoria" placeholder="Ingrese Categoria" value="<?php echo $row['categoria']  ?>">

                    <input type="submit" class="form__input__button" value="Actualizar">
            </form>

        </div>
    </body>
</html>