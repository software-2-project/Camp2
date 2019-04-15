<?php
include "../Models/visitor.php";
include "../Models/members.php";
include_once "../Models/user_data.php";
include "../Models/Register.php";
include_once "../Models/app_user.php";
include '../Models/validation.php';
include '../Models/Contact.php';
include '../Models/reservation.php';
include '../Models/contact_with_admin.php';

if($_GET){
/* Register */
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

    /* login */
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
                    // header("location:login.php");   
                    $ob = new validation();
                    $ob->Login_error();
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
                        $val = new validation();
                        $val->Login_error();                                
                    }
                }
            }

        }
        /* Talent */

        if($_GET['do']=='add_talent'&&$_GET['iduser'])
        {
                    $title = $_POST['title'];
                    $discription = $_POST['description'];
                    $user_id=$_GET['iduser'];
                                        
                    $op = new visitor();
                    $op->add_talent($title , $discription , $user_id);

        }
        /* contact_mail */

        if($_GET['do'] == 'sendmail'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subj =  $_POST['subject'];
            $body =  $_POST['message'];
            $obj = new contactMail();

            $obj->send_mail($name, $email, $subj, $body);
 
        }

       /* competition */

        if($_GET['do'] == 'competition'){
            $obj = new competition();
            $val = $obj->get_comptetion();
            foreach ($val as $value)
			{
                echo "<div style='text-align: center;padding: 20px;'>";
                echo "<h1 style = 'color: #ff8000'>" . $value['com_name'] . "</h1>" ;
                echo "<div>" . $value['com_description'] . "</div>";
                echo "<button><a href='../Views/reservations.php?do=confirm_reservecompetition&iduser=1&idcom=" . $value['com_id'] ."'>Reserve</a></button>" ;
                echo "</div>";
		   	}
        }
        if($_GET['do'] == 'confirm_reservecompetition'){
            if ($_GET['iduser'] && $_GET['idcom']){
                $ob = new competition();
                $ob->reserve_competition($_GET['iduser'] , $_GET['idcom']);
                echo "<script type='text/javascript'>alert('Reserved successfuly')</script>";
            }
        }

        /* trips */

        if($_GET['do'] == 'trip'){
            $obj = new trips();
            $val = $obj->get_tripsavailable();
            foreach ($val as $value) 
			   {
                echo "<div style='text-align: center;padding: 20px;'>";
                echo "<h1 style = 'color: #ff8000'>" . $value['trip_name'] . "</h1>" ;
                echo "<div>" . $value['trip_description'] . "</div>";
                echo "<button><a href='../Views/reservations.php?do=confirm_trips&iduser=1&idtrip=" . $value['trip_id'] . "'>Reserve</a></button>" ;
                echo "</div>";	
			}
        } 

        if($_GET['do'] == 'confirm_trips'){
            if ($_GET['iduser']&&$_GET['idtrip']){
                $obj= new trips();
                $obj-> reserve_trips($_GET['iduser'], $_GET['idtrip']);
                echo "<script type='text/javascript'>alert('Reserved sucessfuly')</script>";

            }
        }

        if($_GET['do'] == 'sendopnion'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $obj = new contact_with_admin();
            $obj->sendOpnion($name, $email, $subject, $message);
        }


    
}


?>