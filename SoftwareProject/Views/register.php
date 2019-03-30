<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    <br><br><br>
<body class="registerBody">
   <center> <div class="container">
    
       <table class="container">
      
       <tr>
    
            <!-----------Left Side-------------->
           <td> <div class="leftDiv">
           <center> <p>BE  
           <br><span> A CAMBER</span>
            NOW!</p></center>
         <center>   <a class="haveAcount" href="login.php">already have an account?</a></center>
          
           </div>
           </td>

			
            <!-----------Right Side-------------->
				<td>
                <div  class="register">

                <?php
                include '../Controller/cont.php';
                ?>
           
						
                <!--Starting of Form----------->
                <form  action="index.php?do=login" method="post">
                <table>
                        <tr>

                            <td><input class="TF" type="text" id="name" placeholder=" First Name"  name="fname"  required></td>
                        </tr>

                        <tr>

                            <td><input class="TF" type="text" id="name" placeholder="  Last Name"  name="lname" required></td>
                        </tr>

                        <tr>

                            <td><input class="TF" type="email" id="email" placeholder="E-Mail" name="email" required></td>
                        </tr>

                        <tr>

                            <td><input class="TF"  type="password" id="password" placeholder="Password" minlength="8" maxlength="16" name="password" required></td>
                         </tr>

                        <tr>

                            <td><input class="TF"  type="date" id="date" name="birthdate"  required></td>
                        </tr>

                        <tr>

                            <td><input  class="TF"  type="text" id="tel-number" placeholder=" Phone Number" name="phone" required></td>
                        </tr>

                        
                         <!-- <tr>

                            <td ><input  class="TF"  type="password" id="confirmPassword" placeholder="Confirm Password" name="confirmpassword"  required></td>
                        </tr> -->

                    </table>
                                         
                    <input type="submit" class="submitRegister" value="Register">
                      
                    </form>
					<!--End of Form----------->

        </div>	</td>				
           
           </tr>
       
       </table>
           </div></center>


</body>
</html>