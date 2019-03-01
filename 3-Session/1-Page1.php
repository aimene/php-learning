<?php
session_name('TPPHPMIAGE');
session_start();

if (isset($_SESSION['prenom'])) {
  $prenom = $_SESSION['prenom'];
  $message = "Votre prénom : $prenom !";
} else {
  $message  = "Vous etes inconnu, veuillez saisir votre nom :\n";
  $message .= "<A HREF=\"EnregistrementSession.php\">cette page</A>.\n";
}
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="css/styleLogin.css">
<TITLE>Qui vous &ecirc;tes...</TITLE>
<BODY>
<H1>Qui vous &ecirc;tes...</H1>
<BR>
<BR>

<div class="wrapper">
<p>
<?php
  echo $message;
?>
</p>
<div class="container">
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

<BR>
<BR>
</DIV>
</BODY>
</HTML>