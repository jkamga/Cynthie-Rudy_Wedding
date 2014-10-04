<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnecteBd
 *
 * @author kaizeurk
 */
class ConnecteBd extends PDO{
    //put your code here
    /*public function afficher(){
     echo "commencement de la classe";
    }
     public function affichage(){
     echo "apres la connection";
    }*/
    	private static $_instance;

	/* Constructeur : héritage public obligatoire par héritage de PDO */
	public function __construct( ) {
	
	}
	// End of PDO2::__construct() */

	/* Singleton */
	public static function getInstance() {
	
		if (!isset(self::$_instance)) {
			
			try {
		//ConnecteBd::afficher();
				self::$_instance = new PDO('mysql:host=localhost;dbname=rudy', 'jkamga', 'justin23');
		//	ConnecteBd::affichage();
			} catch (PDOException $e) {
			
				echo $e;
			}
		} 
		return self::$_instance; 
	}
	// End of PDO2::getInstance() */
}
//print_r(ConnecteBd::getInstance());

?>
