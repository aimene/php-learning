<?php

// affichage d'un tableau
function affiche_tableau ($t) {
  echo sizeof($t) . " copie(s) ont été corrigée(s) : <br/>" ;
  
  echo "<b>Les notes : </b></br>";
  echo " ----------------------- " ;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    echo "<br/>";
	if($t[$i] < 10)
		echo "<font color=\"red\">" . $t[$i] . "</font>" ;
    else 
		echo "<font color=\"green\">" . $t[$i] . "</font>" ;
	
	echo '/20';
	
  }
  echo "<br/>";
  echo " ----------------------- <br/>" ;
  
}

// calcul de la moyenne des éléments d'un tableau t
function moyenne ($t) {
  $somme = 0;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    $somme = $somme + $t[$i];
  }
  echo '>La moyenne est de ',($somme/sizeof($t)),"<br/>";
}

// > à la moyenne
function onteulamoyenne ($t) {
  $fois = 0;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    if ($t[$i]>=10) {
      $fois = $fois + 1;
    }
  }
  echo " >> $fois personne(s) ont eu la moyenne <br/>";
}


// < à la moyenne
function recale ($t) {
  $fois = 0;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    if ($t[$i]<10) {
      $fois = $fois + 1;
    }
  }
  echo " >> $fois personne(s) recalé(s) <br/>";
}

// meilleure note
function notemax ($t) {
  $max = 0;
  for ($i=0 ; $i<sizeof($t) ; $i++) {
    if ($t[$i] > $max) {
      $max = $t[$i];
    }
  }
  echo " >>>> la note maximale est $max<br/>";
}

// teste si quelqu'un a eu 20
function ya20 ($t) {
  $i = 0;
  while (($i<sizeof($t)) && ($t[$i]!=20)) {
    $i = $i+1;
  }
  if ($i<sizeof($t)) {
    echo " >>>>>>>>  quelqu'un a eu 20 ! (il(s) paye(nt) l'apéro) <br/>";
  } else {
    echo " >>>>>>>>  personne n'a eu 20 ! tout le monde paye l'apero <br/>";
  }
}


// appels aux procédures définies ci-dessus sur un tableau de notes

// définition d'un tableau
$notes    = array(5,12,8,19,10,18,2,3,8,8,9,11,12,10,10,9,15.5);

// affichage 
affiche_tableau($notes);
// moyenne de la promo
moyenne($notes);
// combien de personnes ont eu la moyenne ?
onteulamoyenne($notes);
// quelle est la note maximale obtenue ?
Recale($notes);
// quelle est la note maximale obtenue ?
notemax($notes);
// est-ce quelqu'un a eu 20 ?
ya20($notes);