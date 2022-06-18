<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM asignatura";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ASIGNATURA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
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

            </div>

        </div>            
    </body>
</html>