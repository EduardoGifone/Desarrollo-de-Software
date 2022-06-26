<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>DATOS PERSONALES</title>
   </head>
   <body>
       <!--Aquí debe de ser insertado el código php-->
        <?php
            // Declaracion de variables
            $Nombres = (string) 'Eduardo Juareis';
            $Apellidos = (string) 'Gifone Villasante';
            $Codigo = (string) '193001';
            $AnioNacimiento = (int) 2002;
            $AnioActual = (int) 2022;
            
            // Impresion de daots
            echo 'Mi nombre completo es: '.$Nombres.' '.$Apellidos.'<br>';
            echo 'Código de estudiante: '.$Codigo.'<br>';
            echo 'Edad actual: '.$AnioActual - $AnioNacimiento.'<br>';
        ?>
   </body>
</html>