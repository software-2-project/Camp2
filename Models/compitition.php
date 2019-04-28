<?php
include 'connection.php';
class compitition{
    public function Add_Compitition($com_name, $com_desc){
        $query = "INSERT INTO `competitions` (`com_name`, `com_description`) VALUES ('$com_name', '$com_desc')";
        $res = mysqli_query($GLOBALS['conn'], $query);
        if($res){
            echo "<script >alert('A new Admin added successfully')</script>";
        }
        else{
            echo 'bad';
        }
    }
}