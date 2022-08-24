 <?php

 if (isset($_POST['submit'])) {
   $name =$_POST['name'];
   $email =$_POST['email'];
   $subject =$_POST['Subject'];
   $message =$_POST['message'];

   $to ='lakshanravindu999@outlook.com';
   $mail_subject ='Message From Website';
   $email_body ="Message from Lakshan website:<br>";
   $email_body ="<b>Drom:</b> {$name} <br>";
   $email_body ="<b>Subject:</b>{$name}<br>";
   $email_body ="<b>message:</b><br>" . nl2br(strip_tags($message));

   $header ="From: {$email}\r\ncontent-Type: text/html;";

  $send_mail_result = mail($to,$mail_subject,$email_body,$header);

  if ($send_mail_result ) {
    echo "Message Sent";
  } else{
    echo "message not sent";
  }
 }



 ?>