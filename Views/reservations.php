<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reservation-Summer Camp</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	
</head>

<body>
	
	<div class="header">
		<div>
			<a href="index_members.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li >
					<a href="index_members.php"><span>H</span>ome</a>
				</li>
				<li >
					<a href="talent.php"><span>T</span>alent</a>
				</li>
				<li>
					<a href="contact.php"><span>C</span>ontact</a>
				</li>
				
				<li class="selected">
					<a href="reservations.php"><span>R</span>eservation</a>
				</li>
				<!-- <li>
					<a href="offers.php?do=offers"><span>O</span>ffers</a>
				</li> -->
				<li>  
				   <a href="search.php"><span>S</span>earch</a>
				</li>
				 <?php
		            session_start();
		            if (isset($_SESSION['email']))
						echo " <li><a href='../Models/logout.php'>Logout</a></li> ";
								       
				?>
         
			</ul>
		</div>
	</div>
    
    
    
    
	<div class="body">
		<div>
			<div id="talent">
				<div class="reservation_area">
					<div class="blog">
						<h2>Reservaions</h2>
						
						<div class="first">
							<h3>Please choose  your option</h3>
							
                            <a class="sendd" href="reservations.php?do=competition">Compititions</a>
						  	 <a class="sendd" href="reservations.php?do=trip">Trips</a>

							  
								
						</div>
						
					</div>
				</div>
			</div>
	<?php
	include '../Controller/cont.php';
	 ?>
		</div>
		
		
	</div>
	
</body>

</html>