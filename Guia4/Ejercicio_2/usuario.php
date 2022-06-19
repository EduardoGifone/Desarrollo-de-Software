<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM usuario";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA USUARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style_usuario.css">
    </head>
    <body>
        <div class="container">
            <div class="container__form">
                <form class="form" action="insertar.php" method="POST">

                    <h1 class="container__form__h1">INGRESE DATOS</h1>

                    <label for="cod_usuario" class="container__form__label">Codigo</label>
                    <input type="text" class="container__form__input" name="cod_usuario" placeholder="Ingrese codigo">
                    <label for="password" class="container__form__label">Password</label>
                    <input type="password" class="container__form__input" name="password" placeholder="Ingrese password">
                    <label for="correo_electronico" class="container__form__label">Correo Electronico</label>
                    <input type="text" class="container__form__input" name="correo_electronico" placeholder="Ingrese correo electronico">
                    <label for="imagen" class="container__form__label">Imagen</label>
                    <input type="file" class="container__form__input" name="imagen">

                    <input type="submit" class="container__form__button">

                </form>
            </div>
            <div class="container__bd">

                <div class="container__bd__row container__bd__row--head">
                    <p class="container__bd__row__p">Codigo</p>
                    <p class="container__bd__row__p">Password</p>
                    <p class="container__bd__row__p">Correo Electronico</p>
                    <p class="container__bd__row__p">Imagen</p>
                </div>
                
                <div class="container__bd__row container__bd__row--body">
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <p class="container__bd__row__p"><?php  echo $row['cod_usuario']?></p>
                        <p class="container__bd__row__p"><?php  echo $row['password']?></p>
                        <p class="container__bd__row__p"><?php  echo $row['correo_electronico']?></p>
                        <p class="container__bd__row__p"><?php  echo $row['imagen']?></p>
                        <a href="actualizar.php?id=<?php echo $row['cod_usuario'] ?>" class="container__bd__row__a container__bd__row__a--Editar">Editar</a>
                        <a href="delete.php?id=<?php echo $row['cod_usuario'] ?>" class="container__bd__row__a container__bd__row__a--Eliminar">Eliminar</a>
                    <?php 
                        }
                    ?>
                </div>
            </div>

        </div>            
    </body>
</html>