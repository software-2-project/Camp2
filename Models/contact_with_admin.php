<?php
include 'connection.php';
class contact_with_admin{

    public function sendOpnion($name, $email, $subject, $message){
       $qeuery = "INSERT INTO `ContactWithAdmin` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
       $res = mysqli_query($GLOBALS['conn'], $qeuery);
    }

}
