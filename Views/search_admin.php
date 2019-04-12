<?php
include '../models/connection.php';
$result = null;
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $sql = "SELECT `game`, `day`, `time` FROM `time_table` WHERE `game` LIKE '%" . $searchq . "%' OR `day` LIKE '%" . $searchq . "%' OR `time` LIKE '%" . $searchq . "%'";
    $result = mysqli_query($GLOBALS['conn'], $sql) or die("could not search!");
    $count = mysqli_num_rows($sql);
    if ($count == 0) {
        $output = 'There was no search results';
    } else {
        while ($row = mysqli_fetch_array($result)) {
            $game = $row['game'];
            $day = $row['day'];
            $time = $row['time'];
        }
    }
}
?>


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
				<li>
          <a href="index_admin.php"><span>H</span>ome</a>
        </li>
        <li>
          <a href="addnewadmin.php"><span>A</span>dd new admin</a>
        </li>
        <li>
          <a href="addnewcoach.php"><span>A</span>dd new coach </a>
        </li>
        <li>
          <a href="contact_admin.php"><span>C</span>ontact</a>
        </li>
        <li>
          <a href="../models/reports.php"><span>R</span>eports</a>
        </li>
                                <li class="is selected">
                                    <a href="search_admin.php"><span>S</span>earch </a>
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
        <div >
            <div id="talent">
                <div>

                    <form style="text-align: center;margin-top: 50px;" action="search_admin.php" method="post">
                        <input class="search" id="search" type="text" name="search" placeholder="Search by Country, Day, Time"><br>
                        <input class="submitRegister" type="submit" value="Find">
                    </form>

                    <table>
                        <tr>
                            <th> Country</th>
                            <th> Day</th>
                            <th> Time</th>
                        </tr>
                          <?php
                          while ($row = mysqli_fetch_array($result)) {
                              echo "<tr>";
                              echo "<td>" . $row['game'] . "</td>";
                              echo "<td>" . $row['day'] . "</td>";
                              echo "<td>" . $row['time'] . "</td>";
                              echo "</tr>";
                          }
                          ?>
                    </table>

                </div>
            </div>
        </div>
    </div>


</body>

</html>
