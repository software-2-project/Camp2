<?php
include_once "../Models/user_data.php";
include "../Models/Register.php";
include_once "../models/app_user.php";

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
        if($_GET['do']=='logined')
                {
                    if (isset($_POST['select'])) {
                        if($_POST['select']=='Admin'){
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $UserInfo = new app_user();
                            $check = $UserInfo->login_admin($email, $password);


                            if ($check) {
                                session_start();
                                $_SESSION['email'] = $email;
                                $_SESSION['password'] = $password;


                                header("location:index_admin.php");
                            }
                            else {
                                header("location:index.php");   
                            }
                        }
                    }

                   

                    if (isset($_POST['select'])) {
                        if($_POST['select']=='Member'){
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $UserInfo = new app_user();
                            $check = $UserInfo->login_member($email, $password);

                            if ($check) {
                                session_start();
                                $_SESSION['email'] = $email;
                                $_SESSION['password'] = $password;

                                header("location:index_members.php");
                            }
                            else {
                                header("location:index.php");   
                            }
                        }
                    }

                }
    
}?>