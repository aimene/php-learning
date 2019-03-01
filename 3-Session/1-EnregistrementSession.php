<?php
if (isset($_POST['prenom'])) 
{
  $prenom = $_POST['prenom'];
  session_name('TPPHPMIAGE');
  session_start();
  $_SESSION['prenom'] = $prenom;
  $message = "<FONT COLOR=\"green\">Merci $prenom !</FONT> Votre prénom est enregistré pour une prochaine visite.\n";
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="css/styleLogin.css">
<TITLE>Quel est votre prénom ?</TITLE>
<BODY>

<BR>
<BR>
<div class="wrapper">
<H1>Qui &ecirc;tes vous ?</H1>
 <p>
<?php
if (isset($message)) 
{
	 echo $message;
} 
else 
{
	echo '<form action="'.$_SERVER["PHP_SELF"].'" method="POST">';
	echo "<center><label>Prénom</label>  <INPUT TYPE=\"text\" NAME=\"prenom\">\n</center>";
	echo "<INPUT TYPE=\"submit\">\n";
	echo "</FORM>\n";
}
?>

</p>
<ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
</DIV>
<br/><br/><br/>
</BODY>
</HTML>