<?php
include "connection.php";
include_once "user_data.php";

class Register extends UserData {


    public function signup($fname , $lname , $email , $pass , $birthdate , $phone){

        $query = "INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `birthdate`, `phone`) 
        VALUES ('$fname' , '$lname' , '$email' , '$pass' , '$birthdate' , '$phone')";

        $val = mysqli_query($GLOBALS['conn'], $query);
        
    }
  
}