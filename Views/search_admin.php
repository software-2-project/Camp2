


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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
	<link rel="stylesheet" href="css/style.css" type="text/css"> 
	
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand text-white" href="index_admin.php"> <img   src="Images/logo.png"  alt="logo"  style="width:80px; height:40px;" ></a>

  <!-- Links -->
  <ul class="navbar-nav  ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index_admin.php"><i class="fa fa-home" ></i>Home</a>
    </li>
    
      <li class="nav-item">
      <a class="nav-link" href="search_admin.php"><i class="fa fa-search" ></i>Search</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       <i class="fa fa-plus" ></i> ADD
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="addnewadmin.php">New Admin</a>
        <a class="dropdown-item" href="addcompitition.php">New Competition</a>
        <a class="dropdown-item" href="addtrip.php">New Ttip</a>
        
      </div>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="complians.php"><i class="fa fa-bullhorn" ></i>Complians</a>
    </li>
       <li class="nav-item">
      <a class="nav-link" href="contactadmin.php"><i class="fa fa-comments" ></i>Contact</a>
    </li>
     <?php
                    session_start();
                    if (isset($_SESSION['email']))
                        echo " <li><a href='../Models/logout.php'>Logout</a></li> ";

                ?>
  </ul>
</nav><br><br>
    
				



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
                          include '../Models/connection.php';
                            if (isset($_POST['search'])) {
                            $searchq = $_POST['search'];
                            $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
                            $sql = "SELECT `game`, `day`, `time` FROM `time_table` WHERE `game` LIKE '%" . $searchq . "%' OR `day` LIKE '%" . $searchq . "%' OR `time` LIKE '%" . $searchq . "%'";
                            $result = mysqli_query($GLOBALS['conn'], $sql) or die("could not search!");
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['game'] . "</td>";
                                    echo "<td>" . $row['day'] . "</td>";
                                    echo "<td>" . $row['time'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                          ?>
                    </table>

                </div>
            </div>
        </div>
    </div>


</body>

</html>
