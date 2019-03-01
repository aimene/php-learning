<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée</title>
    </head>
    <body>
    
    <?php
    include 'myPdo.php';

    if ( htmlspecialchars(isset($_POST['pwd'])) AND htmlspecialchars(isset($_POST['name'])) ) 
    {
    $pdo = myPdo::getInstance();

            $requete = $pdo->prepare("SELECT * FROM users where name = :name and password = :pwd and hash_validation='' ; ");
            $requete->bindValue(':name', $_POST['name']);
            $requete->bindValue(':pwd', $_POST['pwd']);

            

            if ($requete->execute()) 
            {    

                if($requete->rowCount() > 0)
                {
                    echo ' <p><strong>Voici la zone privée (déçu ??) </strong></p> ' ;  
                    echo ' <img src="http://i.imgur.com/Mzx93.gif http://ljdchost.com/LGxF63n.gif " alt="ljdc"> ';
                }
                else
                {

                    echo '<p>Mot de passe incorrect ou compte non validé</p>';

                    // ajouter gestion erreur ...

                }

            }
    }

    else
        
        {
                echo 'Mot de passe ou login manquant <br>';
                echo ' <img src="http://ljdchost.com/LGxF63n.gif " alt="ljdc"> ';
        }

    ?>
    
        
    </body>
</html>