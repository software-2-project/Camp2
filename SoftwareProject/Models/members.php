<?php

	include "connection.php";
        include_once "app_user.php";


	class members extends app_user{
		
		public function add_talent($title , $description , $user_id){

		$q = "INSERT INTO `talents`(`title`, `description`, `user_id`) 
			VALUES ('$title' , '$description' , '$user_id')";
			$val = mysqli_query($GLOBALS['conn'], $q);
}

		public function get_offers()
		{

			$query="SELECT * FROM offers";
			$val = mysqli_query($GLOBALS['conn'], $query);
			return $val;
		}
		
		public function participate($user_id , $off_id)
		{
			$query = "INSERT INTO `participation`( `us_id`, `offers_id`) 
			VALUES ($user_id , $off_id)";
                    $val = mysqli_query($GLOBALS['conn'], $query);
                    
                }
		
		public function cancel_participate($user_id , $off_id)
		{
			$query = "DELETE FROM `participation` WHERE us_id = $user_id and offers_id = $off_id";
			$val = mysqli_query($GLOBALS['conn'], $query);
		}
		
		public function get_yourparticipation($us_id)
		{
			$query = " SELECT off_id , description_offers from offers inner join participation on offers.off_id = participation.offers_id and participation.us_id = $us_id ";
			$val = mysqli_query($GLOBALS['conn'], $query);
			return $val;
                }
                
                public function add_file($filename , $actualfile_name ){

      			 $query = "INSERT INTO `file`(`file_name`, `file_actual`) VALUES ('$filename' , '$actualfile_name')";
     			 $val = mysqli_query($GLOBALS['conn'], $query);
  		}
                
                function load($data)
                {
                     
                     $query = "INSERT INTO `contact`(`photo`) VALUES ('$data')";
                     $val = mysqli_query($GLOBALS['conn'], $query);
                 
                }
                
}
