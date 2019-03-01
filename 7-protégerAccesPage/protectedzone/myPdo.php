<?php

/**
 * Classe implémentant le design pattern singleton pour PDO
 *  >> Avoir qu'une seule et unique instance d'une même classe dans un programme. 
 *  Concrètement, un singleton est très simple à mettre en place. Il est composé de 3 caractéristiques :
 *	  >> Un attribut privé et statique qui conservera l'instance unique de la classe.
 *    >> Un constructeur afin d'empêcher la création d'objet depuis l'extérieur de la classe
 *    >> Une méthode statique qui permet soit d'instancier la classe soit de retourner l'unique instance créée.
 *
 * @author Vincent Schorr
 */

include 'config.php';

class myPdo extends PDO 
{

 	// valeur ne dépend pas de l'objet créé à partir de cette classe.
	private static $m_instance;

	/* Constructeur : héritage public obligatoire par héritage de PDO */
	public function __construct( ) 
	{
		// ici il ne fait rien
	}
	

	// le design pattern Singleton : utilisation d'une méthode static
	public static function getInstance() 
	{
		// on instancie une seule et unique fois l'objet PDO
		if (!isset(self::$m_instance)) 
		{
			try 
			{
			
				self::$m_instance = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD);
			
			} catch (PDOException $e) 
			{
			
				echo $e;
			}
		} 
		return self::$m_instance; 
	}
}
