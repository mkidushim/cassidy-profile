<?php
  include 'connection.php';
  
  $object = array();
  $params = ['name','email','message'];    
  foreach ($params as $key => $value) {
    if (!isset($_REQUEST[$value])){
      $response['content'] = $value.' parameter missing. add_track.php';
      log_and_respond($response);
    }
    $_REQUEST[$value] = cleanInput($_REQUEST[$value]);
    $object[$value] = $_REQUEST[$value];
  }

  add();

  function add(){
    global $m, $response, $userID, $_REQUEST,$object;
    $m->autocommit(FALSE);
    extract($_REQUEST);
    $fields = '`created_at`,';
    $vals = "CURRENT_TIMESTAMP,";
    foreach ($object as $key => $value) {    
      $fields .= "`$key`,";
      $vals .= "'$value',";    
    }
    
    $fields = rtrim($fields,',');
    $vals = rtrim($vals,',');

    $sql = "INSERT INTO `messages` ($fields) VALUES ($vals)";  
    if (!$m->query($sql)){
      $m->rollback();
      $m->autocommit(TRUE);
      $response['content'] = 'Query error could not submit message. submit_form.php';
      log_and_respond($response);    
    }
    $response['content'] = $id;
    $response['status'] = 'OK';
    log_and_respond($response);  
  }

  
?>