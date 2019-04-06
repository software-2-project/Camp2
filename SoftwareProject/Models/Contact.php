<?php
require 'Contact-mail/PHPMailer-master/src/PHPMailer.php';
require 'Contact-mail/PHPMailer-master/src/SMTP.php';
require 'Contact-mail/PHPMailer-master/src/Exception.php';
require 'Contact-mail/PHPMailer-master/src/OAuth.php';
require 'Contact-mail/PHPMailer-master/src/POP3.php';
 class contactMail{ 
     public function send_mail($name, $usr_mail, $subject, $body){
         $mail = new PHPMailer\PHPMailer\PHPMailer();
         $mail->IsSMTP();
         $mail->SMTPAuth = true;
         $mail->SMTPSecure = 'ssl';
         $mail->Host = 'smtp.gmail.com';
         $mail->Port = 465;
         $mail->IsHTML(true);
         $mail->Username = 'lacasa.fcih@gmail.com';
         $mail->Password = 'lacasafcih';
         $mail->SetFrom($usr_mail);
         $mail->Subject  = $subject;
         $mail->Body = $body;
         $mail->addAddress($usr_mail,$name);
        //  $mail->Send();
         if(!$mail->Send())
             echo 'Mail wasnot Sent '.$mail->ErrorInfo;
           
           else
               echo 'Mail Sent';
             
        }
       



 }




?>