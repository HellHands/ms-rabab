<?php 	 
header('Content-Type: application/json');

require_once('../includes/Config.php');
require_once('../includes/Functions.php');

$url      = $_SERVER['REQUEST_URI'];
$segments = explode('/', $url);
$app      = new Functions();

;
if(($segments[3] == 'user') && (!empty($segments[4])) && (gettype($segments[4] == 'string')) && (!strpos($segments[4], ".php"))){
	$username = $segments[4];
	$app->say_hello($username);
	//$app->get_user($username);		
}else{
	$app->show_404();
}

?>