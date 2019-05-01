<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Summer Camp </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	  <!-----------------Nav Bar Stat    -------------->
    <div class="navbar">
    	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand text-white" href="index_admin.php"> <img   src="Images/logo.png"  alt="logo"  style="width:80px; height:40px;" ></a>

  <!-- Links -->
  <ul class="navbar-nav  ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php"><i class="fa fa-home" ></i>Home</a>
    </li>

      <li class="nav-item">
      <a class="nav-link" href="about.php"><i class="fa fa-search" ></i>About</a>
    </li>

    
    
        <li class="nav-item">
      <a class="nav-link" href="programs.php"><i class="fa fa-list" ></i>Programms</a>
    </li>
       
        <li class="nav-item">
      <a class="nav-link" href="staff.php"><i class="fa fa-users" ></i>Staff</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="contact.php"><i class="fa fa-phone" ></i>Contact</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="login.php"><i class="fa fa-sign-in-alt" ></i>Login</a>
    </li>
		
  </ul>
</nav><br><br>
    </div>
     <!-----------------Nav Bar Ended   -------------->
				 <?php
		            session_start();
		            if (isset($_SESSION['email']))
						echo " <li><a href='../Models/logout.php'>Logout</a></li> ";
								       
				?>
			
	<div class="body">
	    <?php
		include '../Controller/cont.php';
        ?>
		<div class="contact">
			<div>
				<div>
					<div class="contact">
						<h2>SUMMER CAMP INFO</h2>
						
						<h3><span>F</span>or <span>A</span>ny <span>I</span>nquiries, <span>P</span>lease <span>F</span>ill <span>o</span>ut <span>T</span>he <span>F</span>orm <span>B</span>elow.</h3>
						<form action="contact.php?do=sendopnion" method="post">
							<table>
								<tr>
									<td><label for="name"><span>N</span>ame:</label></td>
									<td><input type="text" id="name" name="name"></td>
								</tr>
								<tr>
									<td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>
									<td><input type="text" id="email" name="email"></td>
								</tr>
								<tr>
									<td><label for="subject"><span>S</span>ubject:</label></td>
									<td><input type="text" id="subject" name="subject"></td>
								</tr>
								<tr>
									<td><label for="message"><span>M</span>essage:</label></td>
									<td><textarea name="message" id="message" cols="30" rows="10" ></textarea></td>
								</tr>
							</table>
							<input type="submit" value="Send" id="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	    <!------------------Footer--------------------------->
	         <!-- Footer -->
<footer class="foote page-footer font-small cyan ">

    <!-- Footer Elements -->
    <div class="iconscontainer">

      <!-- Grid row-->
      <div class="row">
          
        <!-- Grid column -->
       <div class="col-md-12 py-5 ">
          <center> <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic footericons" href="#">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic footericons" href="#" >
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic footericons" href="#">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic footericons" href="#">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic footericons" href="#">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic footericons" href="#">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div></center>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
     
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
    
</body>
</html>
