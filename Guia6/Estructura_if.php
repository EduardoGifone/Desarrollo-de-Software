<?php
	//Determinar el mayor de 3 números 
    $primer = (integer) 20; 
    $segundo = (integer) 5; 
    $tercer = (integer) 25; 
    $mayor = (integer) 0; 

    echo 'LOS NÚMEROS A COMPARAR: <b>'.$primer.', '.$segundo.' y '.$tercer.'</b><br>'; 
    if($primer > $segundo): 
    $mayor = $primer; 
    else: 
    $mayor = $segundo; 
    endif; 
    if($mayor < $tercer): 
    $mayor = $tercer;
    endif; 
    echo 'EL NUMERO MAYOR ES: <b>'.$mayor.'</b><br>' 
?>
