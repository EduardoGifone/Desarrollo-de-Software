<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>OPERADORES UNARIOS</title>
   </head>
   <body>
       <!--Aquí debe de ser insertado el código php-->
        <?php 
            $a = (integer) 10; 
            echo 'El valor de a inicial es: '.$a.'<br>'; 
            echo 'El valor de a modificado con el operador pre incremento es: '.(++$a).'<br>'; 
            echo 'El valor de a modificado con el operador post incremento es: '.($a++).'<br>'; 
            echo 'El valor de a modificado con el operador pre decremento es: '.(--$a).'<br>'; 
            echo 'El valor de a modificado con el operador post decremento es: '.($a--).'<br>'; 
        ?>
   </body>
</html