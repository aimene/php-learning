<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TP 1 - Protection par mot de passe</title>

        <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
    </head>
    <body>

         <?php include 'menu.php' ?>
      
    <div>

       <H1><b><p>Veuillez vous identifier avec votre compte autorisé</p></H1></b>
        <form action="zone_prive.php" method="post">
            <p>
           Nom : <input type="text" name="name" />    <br>
           Mdp : <input type="password" name="pwd" /> <br>
            <input type="submit" value="Valider" /> 
            </p>
        </form>


        <a href="form_add.php"> Demander accès</a>

    </div>


     </body>
</html>