<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Summer Camp</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script>
            var i = 0; 			// Start Point
        var images = [];	// Images Array
        var time = 3000;	// Time Between Switch

        // Image List
        images[0] = "images/s5.jpg";
        images[1] = "images/s2.jpg";
        images[2] = "images/s3.jpg";
        images[3] = "images/s4.jpg";
      
        

        // Change Image
        function changeImg(){
            document.slide.src = images[i];

            // Check If Index Is Under Max
            if(i < images.length - 1){
              // Add 1 to Index
              i++; 
            } else { 
                // Reset Back To O
                i = 0;
            }

            // Run function every x seconds
            setTimeout("changeImg()", time);
        }

        // Run function when page loads
        window.onload=changeImg;

        
    </script>
</head>
<body>
    
    
            <!-----------------Nav Bar Stat    -------------->
    
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
    
     <!-----------------Nav Bar Ended   -------------->
    
	
   <div class="slideContainer"> 
      <center><h1 class="title">Let's Start <span class="sabout1">The Journey</span></h1></center>
      
       <img class="slides" name="slide" width="100%" height="60%" />
        
       </div>
     
    <!-----First Div--------->
	<div class="body">
        <?php
		include '../Controller/cont.php';
		?>
		<div>
			<div class="featured">
				<img src="images/camping.jpg" alt="">
				<div>
					<div>
						<h3>BE A CAMPER TODAY!</h3>
						<p>
							You can be a camper Today !
                            Just join us and let's start the story.
						</p>
						<a href="register.php">REGISTER NOW!</a>
					</div>
				</div>
			</div>
           
            </div></div>
     <div class="about">
         <br>
			<p class="pabout1">Don't Let Any thing prevent you to be <span class="sabout1">CAMPER</span></p>
			<p class="pabout2"> You have the right to discover anything. </p>
		</div> 
    <!-----------Second Div-------->        

    <!------------------Footer--------------------------->
	         <!-- Footer -->
<footer class="foote page-footer font-small cyan ">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
       <div class="col-md-12 py-5">
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
    
    <script type="text/javascript"  src="js/main.js"></script>
</body>
</html>