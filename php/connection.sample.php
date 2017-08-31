<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json");
	// $androidApiKey = '';


	$dbHost = '';
	$dbUser = '';
	$dbPass = '';
	$dbName = '';

	$emailHost = '';
	$fromEmail = '';

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
  function log_and_respond($response){
    global $m;    
    global $_REQUEST;
    $resp = json_encode($response);
    echo $resp;
    exit;
  }

?>