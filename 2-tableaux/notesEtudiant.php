<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <style> .noteAjournee { color : red }  .noteAdmis { color : green }</style>
    <title>Notes étudiants</title>
</head>
<body>
    <?php
        $notes=array('aimene'=>15,'aimene'=>6,'aimene'=>18,'aimene'=>10,'aimene'=>6,'aimene'=>8,'aimene'=>7,'aimene'=>16,'aimene'=>12,'aimene'=>11,'aimene'=>17,'aimene'=>12.5,'aimene'=>0.5,'aimene'=>2,'aimene'=>13,'aimene'=>20);
        $classe ="";

        function afficheNotes($notes){

            echo"<table><tr><td >Nom</td><td >note</td></tr>";
            foreach ($notes as $key  => $valeur) { 

                if($valeur <10)
                $classe="noteAjournee";
                else
                $classe="noteAdmis";

                echo "<tr><td class='nom'>$key</td><td>$valeur</td></tr>";
                

            }
            echo"</table>";
        }
         afficheNotes($notes);
    ?>
</body>
</html>   