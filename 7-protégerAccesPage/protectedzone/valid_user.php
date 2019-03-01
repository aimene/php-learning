<?php
include 'myPdo.php';

$pdo = myPdo::getInstance();

$hash_validation = md5(uniqid(rand(), true));

$requete = $pdo->prepare("UPDATE users SET
							hash_validation = ''
							WHERE
							id = :id");

	$requete->bindValue(':id', $_GET['id'] );
	


if ($requete->execute()) 
{    
    echo "Utilisateur validé ! Désormais à afficher la page secrete ^^ " ; 
}


?>

