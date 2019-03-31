<?php
		include '../controller/cont.php';
		?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Club System Website</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="header">
		<div>
			<a href="index_members.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li class="selected">
					<a href="index_members.php"><span>H</span>ome</a>
				</li>
				<li>
					<a href="talent.php"><span>T</span>alent</a>
				</li>
				<li>
					<a href="contact.php"><span>C</span>ontact</a>
				</li>
				<li>
					<a href="timetable_members.php"><span>T</span>metable</a>
				</li>
				<li>
					<a href="reservations.php"><span>R</span>eservation</a>
				</li>
				<li>
					<a href="offers.php?do=offers"><span>O</span>ffers</a>
				</li>
				<li>
                                    <a href="search_member.php"><span>S</span>earch</a>
                                </li>
				<?php
		            session_start();
		            if (isset($_SESSION['email']))
		                echo " <li><a href='../models/logout.php'>Logout</a></li> ";
		       
				?>
				
			</ul>
		</div>
	</div>
	<div class="body">
		
		<div>
			<div class="featured">
				<img src="images/camping.jpg" alt="">
				<div>
					<div>
						<h3><span>B</span>E <span>A</span> <span>M</span>EMBR <span>T</span>ODAY!</h3>
						<p>
							You can regester in our club system ,if you join us you can participate in more function that will help you 
						</p>
					</div>
				</div>
			</div>
			<div>
				<div>
					<div>
						<div class="section">
							<h2>WHY CHOOSE US?</h2>
							<p>
								This website can help you to save your time ,you donot need to go to the club to ask about what you need , 
								just check your account to know all information you need it ,you can contact with us too.
							</p>
							<ul>
								<li>
									<p>
										our club system supports rserving teckits.
									</p>
								</li>
								<li>
									<p>
										You can add your talent and find your favourite coach.
									</p>
								</li>
								<li>
									<p>
										You can also get discount if you be a member.
									</p>
								</li>
								<li>
									<p>
										You can book your place to watch matches. 
									</p>
								</li>
							</ul>
							<ul class="last">
								<li>
									<p>
										You can reserve hall for you competition,party,...etc.
									</p>
								</li>
								<li>
									<p>
										You can see timeline of trips and participate to one of them.
									</p>
								</li>
								<li>
									<p>
										You can know about all Opera Concerts.
									</p>
								</li>
								<li>
									<p>
										You can see timelines.
									</p>
								</li>
							</ul>
						</div>
						<div>
							<h3>UPCOMING EVENTS</h3>
							<ul>
								<li>
									<div>
										<span>11/10/2011</span>
										<p>
											This is just a place holder, so you can see what the site would look like.
										</p>
									</div>
								</li>
								<li>
									<div>
										<span>11/19/2011</span>
										<p>
											Praesent quis nisl in velit imper diet suscipit a id quam.
										</p>
									</div>
								</li>
								<li class="last">
									<div>
										<span>11/19/2011</span>
										<p>
											Nullam vulputate elementum consequat. Fusce leo felis, bibendum.
										</p>
									</div>
								</li>
							</ul>
							<a href="events.php">View All</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer">
		<div>
			<div>
				<h3>NEWSLETTER</h3>
				<p>
					Nulla porttitor vulputate elit, trist ique malesuada sem.
				</p>
				<form action="index.html">
					<input type="text" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="submit" value="Get">
				</form>
			</div>
			<div>
				<h4>LATEST BLOG</h4>
				<ul>
					<li>
						<p>
							<a href="blog.html">Phasellus parea ut di tincidunt blandit nisi ut pellentesque.</a>
						</p>
						<span>11/07/2011</span>
					</li>
					<li>
						<p>
							<a href="blog.html">Donec dictum semper augue, ut consectetur magna posuere eget.</a>
						</p>
						<span>11/03/2011</span>
					</li>
					<li>
						<p>
							<a href="blog.html">Cum sociis natoque penatibus et magnis dis parturient.</a>
						</p>
						<span>11/27/2011</span>
					</li>
				</ul>
			</div>
			<div class="connect">
				<h4>FOLLOW US:</h4>
				<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">Facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">Twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" class="google">Google+</a>
			</div>
		</div>
		<div>
			<p>
				Summer Camp &#169; 2011 | All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>