<?php
require 'SGBD_reader.php';
include ('Model/User.php');
echo '<h1>Connexion</h1>'; 
$titre="Connexion";

//On reprend la suite du code
/*if($id!=0){
erreur(ERR_IS_CO);
}*/
if(! isset($_POST['username']) || ! isset($_POST['password'])){
echo '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="./index.html">ici</a> pour revenir</p>';
}
else
{
    
    $message='';
    if (empty($_POST['username']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="./index.html">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
	    session_start();

	if ( isset($_POST['username']) && isset($_POST['password'])) // Acces OK !
	{
	    $autorisation_order = validateUser($_POST['username'],$_POST['password'],$parsed_users_from_DB);
		
		
		if($autorisation_order == 'valid'){
		
	    $current_user = new User();
		$current_user ->set_username($_POST['username']);
		$current_user ->set_password($_POST['password']);
		//$current_user ->set_level($_POST['level']);
		//$current_user ->set_email($_POST['email']);
		
	    $_SESSION['current_user'] = $current_user;
	    
	    /*$message = '<p>Bienvenue '.$_POST['username'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="./home.html">ici</a> 
			pour revenir à la page d accueil</p>';  */
			header("Location: http://localhost/Cynthie_et_Rudy/home.html");
	    }else{
		
		$message = '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="./index.html">ici</a> pour revenir</p>';
		}
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
    echo $message.'</div></body></html>';

}
?>