
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
				<li >
					<a href="index_members.php"><span>H</span>ome</a>
				</li>
				<li class="selected">
					<a href="talent.php"><span>T</span>alent</a>
				</li>
				<li>
					<a href="contact.php"><span>C</span>ontact</a>
				</li>
				
				<li>
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
	
	
	
	
	
	
	<div class="body" >
		
		<?php
			include '../Controller/cont.php';
		?>
		<div >
			<div id="talent">
				<div>
					<div class="blog" >
						<h2>Hurry UP,Talent!</h2>
						<div class="first">
							<h3>You have a telent, Let's grow it !  </h3>
							<form action="confirmation.php?do=add_talent&iduser=1" method="post">
							<br>
						<p id="txt">	Title</p>
							
						  	 <textarea name="title"  class="TF" col="50" required> </textarea>

						  	
							 <br><br>
						<p id="txt">	 Descrition</p>
							 
							 <textarea name="description"  class="TA"  required> </textarea>
							 
							 </textarea>

            			<br><br><br>
            			<input type="submit" value="Add Talent" class="submitRegister">

        			</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	
</body>

</html>