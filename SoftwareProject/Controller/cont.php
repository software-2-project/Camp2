<?php
include_once "../Models/user_data.php";
include "../Models/Register.php";

if($_GET){

    if($_GET['do']=='login')
    {
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $birth=$_POST['birthdate'];
        $phone=$_POST['phone'];

       $obj = new Register();
       $obj->signup($fn, $ln, $email, $pass, $birth, $phone);

    }

    
}?>