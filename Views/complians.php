
<!DOCTYPE html>

<html>
<head>
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
								echo '<li class="user-profile"><a href="#">' . $_SESSION['email'] . '</a></li>';
								
				?>
  </ul>
</nav><br><br>
<div class="body">
        <div >
            <div id="talent">
<table>
                        <tr>
                            <th style="color:#ff8000;font-size:20px;padding-left:15px"> name</th>
                            <th style="color:#ff8000;font-size:20px;padding-left:15px"> email</th>
                            <th style="color:#ff8000;font-size:20px;padding-left:15px"> subject</th>
                            <th style="color:#ff8000;font-size:20px;padding-left:15px"> message</th>
                        </tr>
                          <?php
                          include '../Models/connection.php';
                            $sql = "SELECT * FROM `ContactWithAdmin`";
                            $result = mysqli_query($GLOBALS['conn'], $sql) or die("could not search!");
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td style=padding-left:15px>" . $row['name'] . "</td>";
                                    echo "<td style=padding-left:15px>" . $row['email'] . "</td>";
                                    echo "<td style=padding-left:15px>" . $row['subject'] . "</td>";
                                    echo "<td style=padding-left:15px>" . $row['message'] . "</td>";
                                    echo "</tr>";
                                }
                            
                          ?>
                    </table>
                              </div>
                              </div>
                              </div>        

</body>

</html>
