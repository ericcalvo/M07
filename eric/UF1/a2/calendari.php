<?php
$mes=date("n");
$any=date("Y");
$primerDia=date("w",mktime(0,0,0,$mes,1,$any));
$ultimDia=date("d",(mktime(0,0,0,$mes+1,1,$any)-1));

$dias=array("Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte","Diumenge");

// Indica els dies de la semana i crea la taula.
echo "<table border=2>";
for ($i=0;$i<=6;$i++){
    echo "<td> $dias[$i]</td>";
};

$posicio=1;
$dia=1;
//Comença el programa des del primer dia al ultim del mes.
while ($dia<=$ultimDia){
    echo "<tr>";
    $comptador=0;

    //Per que no pasi de 7 espais en la taula.
    while ($dia<=$ultimDia && $comptador<7){
        //Posicionament dels dias
        while ($posicio<$primerDia){   
            echo "<td></td>";
            $posicio++;
            $comptador++;
        }
        //Escriu els dies en la taula.
        echo "<td>$dia</td>"; 
        $dia++;
        $comptador++;
    }
    echo "</tr>";
}
echo "</table>"
?>