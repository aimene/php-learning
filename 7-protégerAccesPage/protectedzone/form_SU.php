<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TP 1 - Protection par mot de passe</title>

        <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
    </head>
    <body>

         <?php include 'menu.php'        ?>
      
    <div>

      <H1><b> <p>Veuillez entrer le mot de passe SU</p></H1></b>
        <form action="SU_zone.php" method="post">
            <p>
            <input type="password" name="mdp" />
            <input type="submit" value="Valider" />

         
            <input type="hidden" name="action" value=<?php echo $_GET['action']; ?> />

            </p>
        </form>

    </div>


        <p>Cette page est réservée au personnel autorisé </p>
    </body>
</html>