<?php

include_once 'message.php';
include_once 'form.php';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Chat</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <style type="text/css">
 
    </style>
    <body>
    

<hr>
    <H1> Chat mega basique </h1>

    <?php

    $myform = new form("chat_post.php",'Poster vos messages',"post");
    $myform->settext("login","Login : ");
    $myform->settext("message","Votre code : ");
    $myform->setsubmit();
    $myform->getform();

// Todo : gestion Javascript des champs
    //retenir le login ....
    ?>
    
    
<hr>


<?php


$pdo = myPdo::getInstance();


$messages = new message();
$derniersMess = $messages->getMessages(10);

//var_dump($derniersMess);


foreach ($derniersMess as $key => $value) 
{
  echo '<p> <strong>' . htmlspecialchars($value['login']) .
            '</strong> : ' . htmlspecialchars($value['message']) . 
        '</p>';

}

?>
</body>
</html>
