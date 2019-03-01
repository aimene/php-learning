<?php
include 'myPdo.php';

$pdo = myPdo::getInstance();

$hash_validation = md5(uniqid(rand(), true));

$requete = $pdo->prepare("INSERT INTO users SET
        name = :nom_utilisateur,
        password = :mot_de_passe,
        mail = :adresse_email,
        hash_validation = :hash_validation,
        date_inscription = NOW()");

$requete->bindValue(':nom_utilisateur', $_POST['name']);
$requete->bindValue(':mot_de_passe',    $_POST['pwd']);
$requete->bindValue(':adresse_email',   $_POST['mail']);
$requete->bindValue(':hash_validation', $hash_validation);

if ($requete->execute()) 
{    
    echo "Utilisateur bien enregistré" ; 
}


?>

