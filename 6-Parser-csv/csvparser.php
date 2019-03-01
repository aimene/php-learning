<?php
// load vendor autoload
require_once __DIR__ . '/vendor/autoload.php';

use JamesGordo\CSV\Parser;

//var_dump($_FILES['CSVFILE']);

$maxsize = 1048576;
$destination =  'uploads/CSVFiles/csvparsed.csv';
$extensions = array('csv');

//fichier correctement uploadé
     if (!isset($_FILES['CSVFILE']) OR $_FILES['CSVFILE']['error'] > 0) echo "fichier PAS uploadé <br>";
 //taille limite
     if ($maxsize !== FALSE AND $_FILES['CSVFILE']['size'] > $maxsize) echo "taille limite atteinte<br>";
 //extension
     $ext = substr(strrchr($_FILES['CSVFILE']['name'],'.'),1);
     if ($extensions !== FALSE AND !in_array($ext,$extensions)) echo "extension incorrecte<br>";

//Déplacement     
move_uploaded_file($_FILES['CSVFILE']['tmp_name'],$destination);


// Initalize Parser
$structures = new Parser($destination);
$isOk = $structures->checkFile($destination);	

if($isOk)
{
	echo " Is a valid CSV </br>";
	
	echo "Total Parsed: " . $structures->count() . " Structures </br>";
	
	var_dump($structures->all());
	//var_dump($structures);
	
	echo "<table border=\"1\">";
	foreach($structures->all() as $structure)
	{
		echo "<tr>"; 
			echo "<td>";
				echo $structure->id ;
			echo "</td>";
			echo "<td>";
				echo $structure->first_name;
			echo "</td>";
			echo "<td>";
				echo $structure->last_name;
			echo "</td>";			
		echo "</tr>";
		//var_dump($value);
		
		//echo "User Details: {$structure->id} | {$structure->first_name} {$structure->last_name}";
		
		
	}

	echo "</table>";
}
else
	echo " !! Is NOT a valid CSV !! </br>";


