<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json");
	// $androidApiKey = '';

  $emailHost = 'smtp.gmail.com';
	$emailPass = '';
	$fromEmail = '';
	$fromEmailName = 'Cassidy Humphrey Website';
	
	$response = array(
		'status'=>'NO',
		'content'=>'',
	);
  function cleanInput($v){
    $v = stripslashes($v);
    $v = trim($v);
    return $v;
  } 
  function log_and_respond($response){
    $resp = json_encode($response);
    echo $resp;
    exit;
  }

?>