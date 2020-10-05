<?php 
$a1 = array( 'A','B','C','D');
$a2=array( 1,2,3,4,5,6,7);
$a3=array( 'Boli', 'Goma', 'Llapis', 'Escurça');
$informacions=array();
$informacions["Lletres"] = $a1;
$informacions["Numeros"] = $a2;
$informacions["Materials Oficina"] = $a3;
foreach ( $informacions as $informacio => $cinfo){
	echo $informacio.": ";
	foreach ( $cinfo as $contingut)
		echo $contingut.", ";
	echo "<br>";
}
?>
