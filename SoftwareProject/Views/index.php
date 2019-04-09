<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Summer Camp</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    
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
	<div class="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li class="selected">
					<a href="index.php"><span>H</span>ome</a>
				</li>
				<li>
					<a href="about.php"><span>A</span>bout</a>
				</li>
				<li>
					<a href="programs.php"><span>P</span>rograms</a>
				</li>
				<li>
					<a href="blog.php"><span>B</span>log</a>
				</li>
				<li>
					<a href="staff.php"><span>S</span>taff</a>
				</li>
				<li>
					<a href="contact.php"><span>C</span>ontact</a>
				</li>
                <li>
					<a href="login.php"><span>L</span>ogin</a>
				</li>
			</ul>
			
		</div>
	</div>
   <div class="slideContainer"> 
      <center><h1 class="title">Let's Start <span class="sabout1">The Journey</span></h1></center>
     <br>  <img class="slides" name="slide" width="75%" height="60%" />
        <img class="screen" src="images/screen.png">
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
	<div class="footer">
		<div>

            
            
            
            
			<div class="latestBlog">
				<h4>LATEST BLOG</h4>
				<ul>
					<li>
						<p>
							<a href="blog.php">10 Benifits to Camp in winter.</a>
						</p>
						
					</li>
					
					<li>
						<p>
							<a href="blog.php">How to be a good camper ?</a>
						</p>
						
					</li>
				</ul>
			</div>
			<div class="connect">
				<h4>FOLLOW US:</h4>
				<a href="http://facebook.com" class="facebook">Facebook</a>
                <a href="http://twitter.com" class="twitter">Twitter</a>
                <a href="http://googleplus.com" class="google">Google+</a>
			</div>
		</div>
		<div>
			<p>
				Summer Camp &#169; 2019 | All Rights Reserved
			</p>
		</div>
	</div>
    
    <script type="text/javascript"  src="js/main.js"></script>
</body>
</html>