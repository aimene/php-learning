<?php

echo $_POST['nom']  .'  '. $_POST['code']  ."\n\r";

if ($_POST['sexe'] == 1 )
	echo "Homme";
else
	echo "Femme";
?>