<?php
  if(isset( $_POST['userName']))
  $name = $_POST['userName'];
  if(isset( $_POST['userEmail']))
  $email = $_POST['userEmail'];
  if(isset( $_POST['userMessage']))
  $message = $_POST['userMessage'];
  if(isset( $_POST['userSubject']))
  $subject = $_POST['userSubject'];

  $content = "From: $name \nEmail: $email \nMessage: $message";
  $recipient = "ugohenriquez25@gmail.com";
  $mailheader = "From: $email \r\n";
  
  if (mail($recipient, $subject, $content, $mailheader)){
    $result = 'Success';
  }
  else{
    $result = 'Sorry, we couldn\'t send your message';  
  }
  
  Header("Location: result.php?result=".$result);
?>