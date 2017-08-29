<?php
	<?php	
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json");
	// $androidApiKey = '';

	// User info for logging
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = 'Not Available';
	if(isset($_REQUEST['HTTP_USER_AGENT'])){
		$user_agent = $_REQUEST['HTTP_USER_AGENT'];
	}

	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = 'root';
	$dbName = 'usma';

	$response = array(
		'status'=>'NO',
		'content'=>'',
	);

	$m = new mysqli($dbHost,$dbUser,$dbPass,$dbName);
	if ($m->connect_errno){
		$response['content'] = 'Error connectiong to the database.';
		log_and_respond($response);
		exit;
	}
	
  function cleanInput($v){
    global $m;
    $v = stripslashes($v);
    $v = $m->real_escape_string($v);
    $v = trim($v);
    return $v;
  } 

?>

?>