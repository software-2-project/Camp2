
<!DOCTYPE html>


<html>
<head>
	<meta charset="UTF-8">
	<title>Talent-Summer Camp</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="header">
		<div>
                    <a href="index_members.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li>
					<a href="index_members.php"><span>H</span>ome</a>
				</li>
				<li>
					<a href="talent.php"><span>T</span>alent</a>
				</li>
				<li>
					<a href="contact.php"><span>C</span>ontact</a>
				</li>
				
				
				<li>
					<a href="reservations.php"><span>R</span>eservation</a>
				</li>
				<li>
					<a href="offers.php?do=offers"><span>O</span>ffers</a>
				</li>

				
                                
				<?php
		            session_start();
		            if (isset($_SESSION['email']))
		                echo " <li><a href='../models/logout.php'>Logout</a></li> ";
		           // echo '<li class="user-profile"><a href="#">' . $_SESSION['email'] . '</a></li>';
				?>

			</ul>
		</div>
	</div>
	<div class="body">
		<div>
			<div>
				<div>
					<div class="blog">
						<h2>confirmation</h2>
						<div class="first">
							<h3>your talent is added successfully , thnks alot ^_^  </h3>
						</div>						
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