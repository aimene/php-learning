<?php include 'header.php' ?>

<?php
include('form2.php');

$myform = new form2("traitement2.php","Coordonnées et hobbies","post");

$myform->settext("nom","Votre nom : &nbsp;");
$myform->settext("code","Votre code : ");
$myform->setradio("sexe"," Homme ","homme");
$myform->setradio("sexe"," Femme ","femme");
echo "<br>";
$myform->setcase("loisir"," Apiculture ","apiculture");
$myform->setcase("loisir"," Apéro ","apéro");
$myform->setcase("loisir"," Football ","football");
$myform->setsubmit();
$myform->getform();

?>


<?php include 'footer.php' ?>