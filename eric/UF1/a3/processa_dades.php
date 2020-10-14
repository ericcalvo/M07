<?php

   print_r($_REQUEST["mytext"]);
   echo "<br>";

   print_r($_REQUEST["myradio"]);
   echo "<br>";

   print_r($_REQUEST["mycheckbox"]);
   echo "<br>";

   print_r($_REQUEST["myselect"]);
   echo "<br>";

   print_r($_REQUEST["mytextarea"]);
   echo "<br>";

   print_r($_REQUEST);
   echo "<br>";


   foreach ($_REQUEST as $clau => $valor){
        echo "$clau<br/>";
        $es_array = (gettype($valor) == "array");
        if ($es_array){
            echo "valor, Array: ";
            foreach($valor as $v){
                echo "$v, ";
            }
        } else{
            echo "Valor: $valor <br/> ";
        }
    }











?>