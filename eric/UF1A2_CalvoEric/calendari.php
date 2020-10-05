<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Calendari</title>
</head>
<body>
    <?php

    for($i=1; $i<31; $i++){
        echo("$i ");
        if($i%7==0){
            echo "<br>";
        }
    }

    ?>

</body>