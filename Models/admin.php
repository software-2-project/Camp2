<?php

include "connection.php";
include_once "app_user.php";

class admin extends App_user {

    public function Add_admin($fname , $lname , $phone , $salary , $email , $password ){

      $add_query = "INSERT INTO `admin`(`ad_fname`, `ad_lname`, `ad_phone`, `ad_salary`, `ad_email`, `ad_password`)
      VALUES ('$fname' , '$lname' , '$phone' , '$salary' , '$email' , '$password')";
      $val = mysqli_query($GLOBALS['conn'], $add_query);
      if($val)
       echo "<script >alert('A new Admin added successfully')</script>";
       else
       echo 'bad';
}
}
