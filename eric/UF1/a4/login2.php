<?php
    session_start();
    if (isset($_SESSION["usu"]) or isset($_SESSION["contra"])){
        echo $_SESSION["usu"];
        echo "</br>";
        echo $_SESSION["contra"];
    }else{
        header("Location: http://dawjavi.insjoaquimmir.cat/ecalvo/eric/UF1/a4/login.php");
    }

?>
