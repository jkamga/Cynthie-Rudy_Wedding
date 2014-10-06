<?php
require 'SGBD_reader.php';
include ('Model/User.php');

//On reprend la suite du code
/*if($id!=0){
erreur(ERR_IS_CO);
}*/
if(! isset($_GET['username']) || ! isset($_GET['password'])){
echo '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="./index.html">ici</a> pour revenir</p>';
}
else
{
    
    $message='';
    if (empty($_GET['username']) || empty($_GET['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="./index.html">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
	    session_start();

	if ( isset($_GET['username']) && isset($_GET['password'])) // Acces OK !
	{
	    $autorisation_order = validateUser($_GET['username'],$_GET['password'],$parsed_users_from_DB);

		
		if(strcmp($autorisation_order ,"valid")==0){
		
	    $current_user = new User();
		$current_user ->set_username($_GET['username']);
		$current_user ->set_password($_GET['password']);
		//$current_user ->set_level($_POST['level']);
		//$current_user ->set_email($_POST['email']);
	    $_SESSION['current_user'] = $current_user;
	  
	  /* $message = '<html><body><div><p>Bienvenue '.$_GET['username'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="./home.html">ici</a> 
			pour revenir à la page d accueil</p>';  
			
	    }*/
		$message = "true";
	}
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="./index.html">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="./index.html">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
   
    }
    echo $message;

}
}
?>