<?php
  include 'connection.php';
  require 'email/class.phpmailer.php';
  $object = array();
  $params = ['name','email','message'];    
  foreach ($params as $key => $value) {
    if (!isset($_REQUEST[$value])){
      $response['content'] = $value.' parameter missing. submit_form.php';
      log_and_respond($response);
    }
    $_REQUEST[$value] = cleanInput($_REQUEST[$value]);
    $object[$value] = $_REQUEST[$value];
  }
  $date=date('Y-m-d H:i:s');
  $str =$date.', ';
  extract($_REQUEST);
  foreach ($object as $key => $value) {    
    $str .=$value.', ';
  }
  $str=rtrim($str,', ');
  $file = 'backup.txt';
  file_put_contents($file, $str.PHP_EOL , FILE_APPEND);
  // $fields = rtrim($fields,',');
  // $vals = rtrim($vals,',');

  // $sql = "INSERT INTO `messages` ($fields) VALUES ($vals)";  
  // if (!$m->query($sql)){
  //   $response['content'] = 'Query error could not submit message. submit_form.php';
  //   log_and_respond($response);    
  // }
  $mail = new PHPMailer;
  $mail->IsSMTP();
  $mail->Host = $emailHost;
  $mail->SMTPAuth = true;
  $mail->Username = 'AKIAIKT5WRK6JZUZIDVA';
  $mail->Password = $emailPass;
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;   
  $mail->From = $fromEmail;
  $mail->FromName = $fromEmailName;
  $mail->AddAddress($fromEmail,$fromEmailName);
  $mail->WordWrap = 50;
  $mail->IsHTML(true);
  $mail->Subject = 'Cassidy Humphrey Website Message Sent From: '.$name;
  $mail->Body = $message.'<br>From:'.$name.'   Email:'.$email;
  if (!$mail->Send()){
    $response['content'] = 'Message count not be sent<br>Mailer Error:'.$mail->ErrorInfo;
    log_and_respond($response);
  }
  $response['content'] = 'Message succesfully submitted.';
  $response['status'] = 'OK';
  log_and_respond($response);  
?>
