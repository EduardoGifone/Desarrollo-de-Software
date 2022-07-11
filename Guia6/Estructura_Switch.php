<?php 
	//Convertir el nombre del dia en ingles a español
    $dia_actual = (string) date("D"); 
    $nombre_dia = (string) ''; 
    switch ($dia_actual): 
    case 'Mon': 
    $nombre_dia = 'Lunes'; 
    break; 
    case 'Tue': 
    $nombre_dia = 'Martes'; 
    break; 
    case 'Wed': 
    $nombre_dia = 'Miércoles'; 
    break; 
    case 'Thu': 
    $nombre_dia = 'Jueves'; 
    break; 
    case 'Fri': 
    $nombre_dia = 'Viernes'; 
    break; 
    case 'Sat': 
    $nombre_dia = 'Sabado'; 
    break; 
    default: 
    $nombre_dia = 'Domingo'; 
    break; 
    endswitch; 
    echo 'Hoy es: <b>'.$nombre_dia.'</b><br>'; 
?>
