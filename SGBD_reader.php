<?php
//require 'userDB.json';
$json = file_get_contents("userDB.json");
$parsed_users_from_DB = json_decode($json);

function validateUser($username, $password,$parsed_users_from_DB){

for($i=0; $i < count($parsed_users_from_DB); $i++){

	$aut_username = $parsed_users_from_DB[$i]->{'username'};
	$aut_userpassword = $parsed_users_from_DB[$i]->{'password'};
	
	if( strcmp($username ,$aut_username) == 0 && strcmp($aut_userpassword, $password)== 0){
	return "valid";
	}

}
return 'invalid';
}

?>