<?php
include 'connection.php';
class Trip{
    public function addTrip($trip_name, $trip_disc){
       $query = "INSERT INTO `trips` (`trip_id` ,`trip_name`, `trip_description`) VALUES ('','$trip_name', '$trip_disc')";
       $succes = mysqli_query($GLOBALS['conn'],$query);
       if($succes){
            echo "<script type='text/javascript'>alert('Trip Added successfully')</script>";
       }else{
           echo "bad";
       }
    }
}