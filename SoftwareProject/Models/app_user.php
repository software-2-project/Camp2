<?php
include "connection.php";
include_once "user_data.php";

class App_user extends UserData{
    private $username;
    private $password;
    private $email;
    private $subject;
    private $message;


		public function login_admin($email, $password) {

        $this->email = $email;
        $this->password = $password;

        $sql = "SELECT * FROM `admin` WHERE ad_email='$this->email' AND ad_password ='$this->password' ";
        $result = mysqli_query($GLOBALS['conn'] , $sql);

        if (mysqli_num_rows($result) > 0) {
            return true;
        }
        else {
                return false;
        }
    }

    public function login_member($email, $password) {

        $this->email = $email;
        $this->password = $password;

        $sql = "SELECT * FROM `user` WHERE email='$this->email' AND password ='$this->password' ";
        $result = mysqli_query($GLOBALS['conn'] , $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
        	return false;
        }
    }
    
}