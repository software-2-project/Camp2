<?php
include "connection.php";
include_once "user_data.php";

class App_user extends UserData{
    private $username;
    private $password;
    private $email;
    private $subject;
    private $message;

    public function reportofadmin()
    {
      $row=array();
     $query = "SELECT `ad_fname` FROM `admin` WHERE 1";
          if ($run = mysqli_query($GLOBALS['conn'], $query))
          {
          while($row[]=mysqli_fetch_assoc($run)){
          }}

          return $row;
    }

   
    public function reportofmember()
    {
      $row3=array();
     $query = "SELECT `fname` FROM `user` WHERE 1";
          if ($run = mysqli_query($GLOBALS['conn'], $query))
          {
          while($row3[]=mysqli_fetch_assoc($run)){
          }}

          return $row3;
    }
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