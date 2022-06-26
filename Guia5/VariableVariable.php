<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIABLES VARIABLES</title>
</head>
<body>
    <?php
        // Variable
        $variable = 'Eduardo';

        // Variable variable
        $$variable = ' Juareis';

        // Impresion
        echo $variable.${$variable};
    ?>
</body>
</html>