<?php 
$a1 = array( 'A','B','C','D');
$a2=array( 1,2,3,4,5,6,7);
$a3=array( 'Boli', 'Goma', 'Llapis', 'Escurça');
$a=array('Lletre' => $a1, 'Numeros' => $a2, 'Materials Oficina' => $a3);
foreach ( $a as $titol => $resposta){
	echo $titol.": ";
	foreach ( $resposta as $contingut){
        echo $contingut;
        if ($contingut != end($resposta)){
            echo ", ";
        }
    }
	echo "<br>";
}
?>
