<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>VARIABLES ENTERAS</title>
   </head>
   <body>
       <!--Aquí debe de ser insertado el código php-->
        <?php 
            $primer_entero = (integer) 18; 
            $segundo_entero = (integer) -18; 
            $tercer_entero = (integer) 0x12; 
            $sumatoria = $primer_entero + $tercer_entero; 
            echo '<br>La sumatorio entre dos variables enteras es: '.$sumatoria; 
            $diferencia = $segundo_entero - $tercer_entero; 
            echo "<br>La diferencia entre dos variables enteras: ".$diferencia; 
        ?>
   </body>
</html