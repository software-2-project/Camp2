<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    <br><br><br>
<body class="registerBody">
  
  
    

    
          <?php
            include '../controller/cont.php';
        ?>

            
 <!-----------Right Side-------------->
 <a class="home" href="index.php">Home</a>

    <center>
        <div  class="login">
            <h3>Camp</h3>
                        
         <!--Starting of Form----------->
                <form action="index.php?do=logined" method="POST">
                    <select name="select">
                                     <option value="Admin">Admin</option>
                                     <option value="Member">Member</option>
                                </select>
                                <br>
        
                     <input class="TF" type="text" id="email" placeholder="E-Mail" name="email" required>
                    
                     <input class="TF"  type="password" id="password" placeholder="Password" name="password" minlength="8" maxlength="16" required>

                     <input type="submit" class="submitLogin" value="Login">
                        <center>   
                            
                            <a class="haveAcount" href="register.php">Doesn't have an account?</a>
                        
                        </center>

                </form>
         <!--End of Form----------->    
                
        </div>
    
    </center>                   
           
           
       
       
          


</body>
</html>