<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style> .mois { color : red }  .jours { color : green }</style>
    <title>Tableau basique</title>
</head>
<body style="">

    <?php
        $mois=array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');
        $jours=array('31','28','31','30','31','30','31','30','31','30','31','30');
        echo"<table><tr><td class='mois'>mois</td><td class='jours'>jours</td></tr>";
        for ($i=0; $i < 12 ; $i++) { 
            echo "<tr><td class='mois'>$mois[$i]</td><td class='jours'>$jours[$i]</td></tr>";
        }
        echo"</table>";
    ?>
</body>
</html>