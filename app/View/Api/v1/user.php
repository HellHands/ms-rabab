<?php 	 

require_once('../includes/Functions.php');

$q = '{ 
		"auth" : 
		
			{
				"username" : "raj",
				"password" : "test"

			}
		
	}';		


header('Content-Type: application/json');

$creds    = json_decode($q);

$username = $creds->auth->username;
$password = $creds->auth->password;

$app      = new Functions();
$app->get_user($username, $password);		

?>