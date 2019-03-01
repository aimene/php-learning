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

         <?php 

         include 'myPdo.php';

        if ( htmlspecialchars(isset($_POST['mdp'])) AND htmlspecialchars($_POST['mdp']) ==  "miage") 
        {
             if (htmlspecialchars(isset($_POST['action'])) &&  htmlspecialchars($_POST['action']) ==  "valid") 
             {

                $pdo = myPdo::getInstance();

                $requete = $pdo->prepare("SELECT * FROM users where hash_validation ='' ; ");

                if ($requete->execute()) 
                {    

                    $result = $requete->fetchAll(PDO::FETCH_ASSOC);

                   // var_dump($result);

                    echo '<hr>';
                    echo $requete->rowCount() . ' Utilisateur(s) autorisé(s) : ';
                    echo '<br><hr>';


                    foreach ($result as $key => $value) 
                    {
                       echo ' >> Name = '.$value['name'].'<br>';
                       echo ' >> Mail = '.$value['mail'].'<br>';
                       echo ' >> Date inscription = '.$value['date_inscription'];

                    }
                }

                echo '<br><hr><br>';

                $requete2 = $pdo->prepare("SELECT * FROM users where hash_validation !='' ; ");

                if ($requete2->execute()) 
                {    

                    $result2 = $requete2->fetchAll(PDO::FETCH_ASSOC);

                   // var_dump($result);

                    echo '<hr>';
                    echo $requete2->rowCount() . ' Utilisateur(s) à valider : ';
                    echo '<br><hr>';


                    foreach ($result2 as $key => $value) 
                    {
                       echo ' >> Name = '.$value['name'].'<br>';
                       echo ' >> Mail = '.$value['mail'].'<br>';
                       echo ' >> Date inscription = '.$value['date_inscription'].'<br>';

                       echo '<a href=\'valid_user.php?id='.$value['id'].' \'> VALIDER </a>';


                       echo '<br><hr>';
                    }
                }

            }

            
        }
        else
        {

            echo 'Vous n\'etes pas autorisé à afficher la liste des membres';
        }


          ?>

    </div>


       <b> <p>Cette page est réservée au personnel autorisé </p></b>
    </body>
</html>