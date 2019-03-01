<?php
include_once 'myPdo.php';
class message
{
	private $message;

	public function __construct()
	{
		$this->message ="NA";

	}

	public function setMessage($value)
	{
		$this->message = $value;
		return $this;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function getMessages($nb)
	{

		$pdo = myPdo::getInstance();

		$requete = $pdo->prepare("SELECT login, message FROM chat ORDER BY ID DESC LIMIT 0, $nb");


		if ($requete->execute()) 
		{    
		    $result = $requete->fetchAll(PDO::FETCH_ASSOC);

		    //var_dump($result);

		    return  $result ;
		}
		else
		{
			echo "Erreur select";
			return "";
		}
	}

	public function addMessage($login,$message)
	{

		$pdo = myPdo::getInstance();

		$req = $pdo->prepare('INSERT INTO chat (login, message) VALUES(:login, :message)');

		$req->bindValue(':login', $login);
		$req->bindValue(':message',    $message);

		if (!$req->execute())
		{
			echo "Erreur insert";
			
		}	
	
	}



}

?>