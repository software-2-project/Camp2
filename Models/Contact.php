<?php
require 'Contact-mail/PHPMailer-master/src/PHPMailer.php';
require 'Contact-mail/PHPMailer-master/src/SMTP.php';
require 'Contact-mail/PHPMailer-master/src/Exception.php';
require 'Contact-mail/PHPMailer-master/src/OAuth.php';
require 'Contact-mail/PHPMailer-master/src/POP3.php';
 class contactMail{ 
     public function send_mail($usr_mail, $subject, $body){
         $mail = new PHPMailer\PHPMailer\PHPMailer();
         $mail->IsSMTP();
         $mail->SMTPAuth = true;
         $mail->SMTPSecure = 'ssl';
         $mail->Host = 'smtp.gmail.com';
         $mail->Port = 465;
         $mail->IsHTML(true);
         $mail->Username = 'yasser.tarek@uflare.io';
         $mail->Password = 'yassertarek98';
         $mail->SetFrom($usr_mail);
         $mail->Subject  = $subject;
         $mail->Body = $body;
         $mail->addAddress($usr_mail,"Summer Camp");
        //  $mail->Send();
         if(!$mail->Send())
         echo "<script type='text/javascript'>alert('submitted failed!')</script>".$mail->ErrorInfo;
           
         else
         echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        }
       



 }




?>