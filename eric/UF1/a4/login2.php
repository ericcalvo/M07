<?php
    session_start();
if($_SERVER["REQUEST_METHOD"]=='POST'){
    session_destroy();
}
    if (isset($_SESSION["usu"]) or isset($_SESSION["contra"])){
        echo $_SESSION["usu"];
        echo "</br>";
        echo $_SESSION["contra"];
    }else{
        header("Location: http://dawjavi.insjoaquimmir.cat/ecalvo/eric/UF1/a4/login.php");
    }

?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <form action="login2.php" method="post">
                <input type="submit" value="Log Out">
            </form>
        </body>
    </html>