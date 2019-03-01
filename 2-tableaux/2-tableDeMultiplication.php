<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Table de multiplication</title>

<style type="text/css">
table
{
	border- collapse : collapse ;
}
th,td
{
	border : 1px solid black;
	width : 25px;
	height : 25px;
}

th
{
	background-color : #FFFFFF;
}

.impair
{
	background-color : #A9F5A9;
}

.pair
{
	background-color : #D8F6CE;
}
</style>

</head>
<body>
	<h1> Table de multiplication </h1>

	 <form action="exo2.php" method="GET">
	 	Taille du tableau : <input type="text" value="20" name="taille" />
	 	<input type="submit" value="Valider" />

	 </from>
	 <hr><hr>
<table>
<?php
/*
L'opérateur modulo permet de donner le reste de la division entière. Pour déterminer
si une ligne est paire ou impaire, il suffit alors de regarder la valeur du numéro de ligne
modulo 2.
*/

if( isset($_GET['taille']) &&  $_GET['taille'] != 0)
{
	$n=$_GET['taille'];

	for($ligne=1 ; $ligne<$n ; $ligne++)
	{
		if($ligne %2)
			$class ='impair';
		else
			$class ='pair';
		
		echo '<tr class="'. $class. '">';

		for($col=1 ; $col<$n ; $col++)
		{
			if($ligne==1 || $col==1)
				$cellule ='th';
			else
				$cellule ='td';
			
			echo "<$cellule>";
			
			if(($ligne!=1) and ($ligne==$col))
				echo '<strong>';
			if($ligne!=1 || $col!=1)
				echo $ligne*$col;
			if(($ligne!=1) and ($ligne==$col))
				echo '</strong>';
			
			echo "</$cellule>";
		}
		echo "</tr>";
	}

}



?>
</table>
<body>
</html>