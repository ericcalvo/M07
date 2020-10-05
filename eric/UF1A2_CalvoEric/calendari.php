<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Calendari</title>
</head>
<body>
    <?php
        $dia = 1;
        $mes=date("F");
        $any=date("Y");
        $numero=date('w', mktime(0, 0, 0, $dia, $mes, $any));
        echo "<table border=1><tr><th colspan =7>$mes, $any</th></tr>";
        echo "<tr><th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th><th>Divendres</th><th>Dissabte</th><th>Diumenge</th></tr>";

        
        echo "</table>";

    ?>

</body>
