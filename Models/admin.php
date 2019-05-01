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
  
public function addTrip($trip_name, $trip_disc){
  $query = "INSERT INTO `trips` (`trip_id` ,`trip_name`, `trip_description`) VALUES ('','$trip_name', '$trip_disc')";
  $succes = mysqli_query($GLOBALS['conn'],$query);
  if($succes){
       echo "<script type='text/javascript'>alert('Trip Added successfully')</script>";
  }else{
      echo "bad";
  }
}


public function Add_Compitition($com_name, $com_desc){
  $query = "INSERT INTO `competitions` (`com_name`, `com_description`) VALUES ('$com_name', '$com_desc')";
  $res = mysqli_query($GLOBALS['conn'], $query);
  if($res){
      echo "<script >alert('A new Competition added successfully')</script>";
  }
  else{
      echo 'bad';
  }
}

}
