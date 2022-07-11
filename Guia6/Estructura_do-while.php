<?php 
	//Mostrar los números impares menores al número 100	
	$cantidad = (integer) 0; 
	echo 'Números impares del 1 al 100<br>'; 
	do{
 		if($cantidad % 2): 
 			echo 'Número impar: '.$cantidad.'<br>'; 
		 endif; 
 		$cantidad++; 
	}while($cantidad<=100);
?>
