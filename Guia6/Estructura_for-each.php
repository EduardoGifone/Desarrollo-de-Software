<?php 
	//Imprimir los elementos del arreglo información
	$informacion = []; 
	$informacion = array( 
 	'Carlos', 
	'Zulma', 
 	'Mario' 
	); 
	echo '<b>Recorrido del arreglo con foreach</b>'.'<br>';
	foreach($informacion as $valor): 
		print 'El nombre es: '.$valor.'<br>'; 
	endforeach; 
    echo'<br>';

	echo '<b>Recorrido del arreglo con for</b>'.'<br>';
	for($i = 0; $i < count($informacion) ; $i++): 
 		print 'El nombre es: '.$informacion[$i].'<br>'; 
	endfor; 
?>
