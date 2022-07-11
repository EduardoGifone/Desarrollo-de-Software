<?php
 	//Función: determinar si un año es bisiesto
	$anio= (integer)2022;
	function esbisiesto($anio)
	{
		if($anio%4==0):
			return true;
		else:
			return false;
		endif;
	}
	echo 'El año es bisiesto: '.esbisiesto($anio).'<br>';
?>

<?php 
	//Procedimiento: imprime los datos (nombre y edad) de una persona
	$nombre = (string)'Eduardo Juareis Gifone Villasante';
	$AnioNacimiento = (integer)2002;
	function ImprimirDatos($nombre, $AnioNacimiento)
	{
		echo 'Nombre: '.$nombre.'<br>';
		echo 'Edad: '.(2022-$AnioNacimiento).'<br>';
		return;
	}
	ImprimirDatos($nombre, $AnioNacimiento);
?>
