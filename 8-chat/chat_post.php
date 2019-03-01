<?php

include_once 'message.php';

$message = new message();
$message->addMessage($_POST['login'],$_POST['message']);

// Redirection du visiteur vers la page de départ
header('Location: chat.php');
?>