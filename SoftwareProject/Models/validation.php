<?php
 class validation {
    
   
//     public function is_email ($string)
//     {

//             if(filter_var($string,$FILTER_VALIDATE_EMAIL)==false)
//             {
//                     echo "please enter availed email";
//             }

//     }
//     public function is_password ($string)
//     {

//             if(filter_var($string,$FILTER_VALIDATE_PASSWORD)==false )
//             {
//                     echo "please enter availed password";
//             }
//             if (strlen($string)<8&&strlen($string)>16)
//             {
//                     echo "please enter a password from 8 to 16 number or alphabet";
//             }

//     }
                        public function Login_error(){
                                $message = "Username and/or Password incorrect.\\nTry again.";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                        }
}
