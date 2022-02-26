<?php
require_once __DIR__.'/smtp/PHPMailerAutoload.php';
class Mail
{
    public function __construct()
    {
        
        
    }
    function send_mail($recipient,$subject,$message)
        {
        
          $mail = new PHPMailer();
          $mail->IsSMTP();
        
          $mail->SMTPDebug  = 0;  
          $mail->SMTPAuth   = TRUE;
          $mail->SMTPSecure = "ssl";
          $mail->Port       = 465;
          $mail->Host       = "smtp.gmail.com";

          $mail->Username   = "";
          $mail->Password   = "";
        
          $mail->IsHTML(true);
          $mail->AddAddress($recipient, "esteemed customer");
          $mail->SetFrom("", "My website");
         
          $mail->Subject = $subject;
          $content = $message;
        
          $mail->MsgHTML($content); 
          if(!$mail->Send()) {
           
            return false;
          } else {
            return true;
          }
        
        }

    
}