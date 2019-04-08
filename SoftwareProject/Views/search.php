<!DOCTYPE html>

<html>
    <head>
         <style>
            body {
                overflow-x: hidden;
                
            }
            table {
                width:70%;
                border-collapse: collapse;
                font-size: 18px;
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: auto;
                margin-right: auto;
            }

            table, td, th {
                border: 3px solid #fff;
                background-color: #ff8000;
                padding: 5px;
                text-align: center;
                color: #fff;
                text-transform: capitalize
            }
           
            
        </style> 
        <meta charset="UTF-8">
        <title>Summer Camp</title>
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
				

			</ul>
		</div>
	</div>
    



    <div class="body">
        <div >
            <div id="talent">
                <div >

                    <form style="text-align: center;margin-top: 50px;" action="search.php" method="post">
                        <input class="search" id="search" type="text" name="search" placeholder="Search by Country, Day, Time"><br>
                        <input class="submitRegister" type="submit" value="Find">
                    </form>

                    <table>
                        <tr>
                            <th> Country</th>
                            <th> Day</th>
                            <th> Time</th>
                        </tr>
                        
                    </table>

                </div>
            </div>
        </div>
    </div>


</body>

</html>
