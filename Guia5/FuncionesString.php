<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCIONES DE STRING</title>
</head>
<body>
    <h3>Addslashes</h3>
    <?php
        $var = addslashes('Eduardo "Juareis "Gifone "Villasante');
        echo ($var);
    ?>
    
    <h3>Explode</h3>
    <?php
        $texto = 'Con esta funcion podremos cortar este string';
        $array = explode( ' ', $texto );
        echo $texto.'<br>';
        foreach ( $array as $palabra ){
            echo $palabra . ' <br>';
        }
    ?> 

    <h3>Sprintf</h3>
    <?php
        $numero = 33;
        $pais = "Peru";
        $texto = sprintf("Hay %u millones de personas en %s.",$numero,$pais);
        echo $texto;
    ?>

    <h3>Htmlspecialchars</h3>
    <?php  
        $str = "Esto es <i>italic</i> texto.";  
        echo htmlspecialchars($str, ENT_QUOTES);
    ?>  

    <h3>Md5</h3>
    <?php
        $str = "Hola";
        echo md5($str);
    ?>

    <h3>Money_format</h3>
    <?php
        $numero = 1234.56;
        setlocale(LC_MONETARY,"en_US");
        #echo money_format("El precio es %i", $numero);
        echo "Esta funcion no esta definida en Windows";
    ?>

    <h3>Number_format</h3>
    <?php
        $numero = "999999.49";
        echo number_format($numero, 3)."\n";
    ?>

    <h3>Str_replace</h3>
    <?php
        $cadena = "Esta es la cadena de ejemplo para sustituir un caracter";
        echo $cadena.'<br>';
        $resultado = str_replace("a", "A", $cadena);
        echo "La cadena resultante es: " . $resultado;
    ?>

    <h3>Strcmp</h3>
    <?php
        echo strcmp("Eduardo Juareis","Eduardo Juareis");
    ?>

    <h3>Strlen</h3>
    <?php
        $str = 'abcdef';
        echo strlen($str); // 6
    ?>

    <h3>Strncmp</h3>
    <?php
        $var1 = 'Hola Hermano';
        $var2 = 'Hola Eduardo';
        if (strncmp($var1, $var2, 4) === 0) {
            echo 'Los primeros 5 caracteres de $var1 y $var2 son iguales en una comparación de cadenas que distingue entre mayúsculas y minúsculas';
        }
    ?>

    <h3>Strpos</h3>
    <?php
        $micadena = 'abc';
        $buscame   = 'a';
        $pos = strpos($micadena, $buscame);
        if ($pos === false) {
            echo "El string '$buscame' no se encontro en '$micadena'";
        } else {
            echo "El string '$buscame' se encontro en '$micadena'";
            echo " y esta en la posicion $pos";
        }
    ?>

    <h3>Strtoupper</h3>
    <?php
        $str = "Esta Es Una Frase Cualquiera";
        $str = strtoupper($str);
        echo $str;
    ?>

    <h3>Strtolower</h3>
    <?php
        $str = "Esta Es Una Frase Cualquiera";
        $str = strtolower($str);
        echo $str;
    ?>

    <h3>Substr-replace</h3>
    <?php
        echo substr_replace("Eduardo","Gifone",0);
    ?>

    <h3>Trim</h3>
    <?php
        $cadena = " Hola mundo programador ";
        $cadena_formateada = trim($cadena);
        echo "La cadena original es esta: '".$cadena."' y la formateada es esta otra: '".$cadena_formateada."'";        
    ?>

    <h3>Ucwords</h3>
    <?php
        echo ucwords("eduardo gifone");
    ?>

    <h3>Wordwrap</h3>
    <?php
        $cadena = "12345678901234567890";
        echo wordwrap($cadena, 15, "<br>" ,TRUE);
    ?>

</body>
</html>