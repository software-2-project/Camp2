<?php

	include "connection.php";
	include_once "user_data.php";
	
	class visitor extends UserData {

 		public function sign($fname , $lname , $email , $pass , $birthdate , $phone)
		{
			$q = "INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `birthdate`, `phone`) 
					VALUES ('$fname' , '$lname' , '$email' , '$pass' , '$birthdate' , '$phone')";
			$val = mysqli_query($GLOBALS['conn'], $q);
		}

		public function add_talent($title , $description , $userid)
		{
			$q = "INSERT INTO `talents`( `title`, `description`, `user_id`)
			 VALUES ('$title' , '$description' , '$userid')";
			$val = mysqli_query($GLOBALS['conn'], $q);
		}
	}
