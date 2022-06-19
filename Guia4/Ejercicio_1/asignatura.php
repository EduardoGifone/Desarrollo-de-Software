<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM asignatura";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ASIGNATURA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style_asignatura.css">
    </head>
    <body>
        <div class="container">
            <div class="container__form">
                <form class="form" action="insertar.php" method="GET">

                    <h1 class="container__form__h1">INGRESE DATOS</h1>

                    <label for="cod_asignatura" class="container__form__label">Codigo</label>
                    <input type="text" class="container__form__input" name="cod_asignatura" placeholder="Ingrese codigo">
                    <label for="nombre" class="container__form__label">Nombre</label>
                    <input type="text" class="container__form__input" name="nombre" placeholder="Ingrese nombre">
                    <label for="creditos" class="container__form__label">Creditos</label>
                    <input type="text" class="container__form__input" name="creditos" placeholder="Ingrese numero de creditos">
                    <label for="categoria" class="container__form__label">Categoria</label>
                    <input type="text" class="container__form__input" name="categoria" placeholder="Ingrese categoria">

                    <input type="submit" class="container__form__button">

                </form>
            </div>
            <div class="container__bd">

                <div class="container__bd__row container__bd__row--head">
                    <p class="container__bd__row__p">Codigo</p>
                    <p class="container__bd__row__p">Nombre</p>
                    <p class="container__bd__row__p">Creditos</p>
                    <p class="container__bd__row__p">Categoria</p>
                </div>
                
                <div class="container__bd__row container__bd__row--body">
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <p class="container__bd__row__p"><?php  echo $row['cod_asignatura']?></p>
                        <p class="container__bd__row__p"><?php  echo $row['nombre']?></p>
                        <p class="container__bd__row__p"><?php  echo $row['creditos']?></p>
                        <p class="container__bd__row__p"><?php  echo $row['categoria']?></p>
                        <a href="actualizar.php?id=<?php echo $row['cod_asignatura'] ?>" class="container__bd__row__a container__bd__row__a--Editar">Editar</a>
                        <a href="delete.php?id=<?php echo $row['cod_asignatura'] ?>" class="container__bd__row__a container__bd__row__a--Eliminar">Eliminar</a>
                    <?php 
                        }
                    ?>
                </div>
            </div>

        </div>            
    </body>
</html>