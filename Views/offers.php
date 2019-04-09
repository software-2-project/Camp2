<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Offers-Summer Camp</title>
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
				<li >
					<a href="reservations.php"><span>R</span>eservation</a>
				</li>
				<li class="selected">
					<a href="offers.php?do=offers"><span>O</span>ffers</a>
				</li>
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
	        <table style="margin-left: 20%; margin-bottom: 20px; width: 60%; padding: 10px 25px 30px 15px; text-align: center; color: #ff8000; background-color: rgba(255,255,255,0.8)">

	                	
	        </table>
	    </div>
		
	</body>
</html>