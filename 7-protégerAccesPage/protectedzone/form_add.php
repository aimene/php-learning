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

        <h1>Ajout d'utilisateur autorisé</h1>
        <form action="addUser.php" method="post">
            <div>
                Nom :       <input type="text" name="name" />   <br>
                Password :  <input type="password" name="pwd" /><br>
                Mail :      <input type="text" name="mail" />   <br>

                <input type="submit" value="Valider" />
            </div>
        </form>

    </div>

    </body>
</html>