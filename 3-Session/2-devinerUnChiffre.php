<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Jeu</title>

<style type="text/css">

</style>

</head>
<body>

<h1> Devine ! </h1>

<form method="post" action="exo3b.php">
<input type="submit" value="Commencer le jeu" />

<input type="hidden" name="tentative" value="7" />
</form>

<?php
if( isset($_POST['tentative']) )
{
	if( $_POST['tentative'] == 7 )
		$_SESSION['nbM'] = mt_rand(0,100);
	
	//echo '<p> Nombre magique : ' . $_SESSION['nbM'] . '</p>';

	$gagne = false;
	//L'utilisateur a saisi un nombre
	if( isset($_POST['nb']) )
	{
		$nb = (int) $_POST['nb'];
		//un peu de log
		//var_dump($nb);
		//var_dump($_SESSION['nbM']);
		if($nb==$_SESSION['nbM'])
		{
			echo '<p> Vous avez gagné! Le nombre était'. $nb.' <a href="exo3b.php"> Rejouer </a></p>'; 
			$gagne = true;
		}
		elseif ($nb < $_SESSION['nbM'])
			echo '<p> Le nombre à trouver est plus grand </p>';
		else
			echo '<p> Le nombre à trouver est plus petit </p>';
	}

	if(!$gagne)
	{
		if( $_POST['tentative'] !=0 )
		{

			echo '<p> Il vous reste ' . $_POST['tentative'] . ' tentatives </p>';
			echo '<form method="post" action="exo3b.php">
			Nombre : <input type="text" name="nb" />
			<input type="submit" value="Proposition " />
			<input type="hidden" name="tentative" value="'. ($_POST['tentative'] - 1) . '" />
			
			</form>';
		}
		else
		{
			echo '<p> Vous avez perdu! Le nombre était : ' . $_SESSION['nbM'] . ' </p>';
			echo '<p> Vous avez perdu! <a href="exo3b.php"> Rejouer </a> </p>';
		}
	}
}
?>
</body>
</html>








<body>
</html>