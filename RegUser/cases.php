<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crime City</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		table th{
			background-color: #252a72;
			color: white;
			border-style: solid;

		}
		table, th, td{
			border: 1px solid black;
		}
		#body1 a{
			color: blue;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div id="container">
	<div id="worldimage"><img src="../img/Head.jpg"></div>
	<div id="menu">
      <nav background-color="blue">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="cases.php">VIEW REPORTED CASES</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
      </nav>
    </div>
	
        <div>
        	<?php
			$mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');
			$query = "SELECT * FROM crime_report where reporterId= '" . $_SESSION['idno'] . "' ";
			echo '<table border="0" cellspacing="2" cellpadding="2"> 
			      <tr> 
			          <th> <font face="Arial">OBNo.</font> </th> 
			          <th> <font face="Arial">Crime Type</font> </th> 
			          <th> <font face="Arial">Crime Location</font> </th> 
			          <th> <font face="Arial">Date Reported</font> </th> 
			          <th> <font face="Arial">Reporter Id</font> </th>
			          <th> <font face="Arial">More Details</font> </th>
			          <th> <font face="Arial">STATUS</font> </th>
			          <th> <font face="Arial">LAST UPDATE</font> </th>
			      </tr>';
 
			if ($result = $mysqli->query($query)) {
			    while ($row = $result->fetch_assoc()) {
			          $crimeCode = $row['crimeCode'];
			          $description = $row['description'];
			          $crimeLocation = $row['crimeLocation'];
			          $dateReceived = $row['dateReceived'];
			          $reporterId = $row['reporterId'];
			          $moreDetails = $row['moreDetails'];
			          $status = $row['status'];
			          $lastUpdate = $row['lastUpdate'];
			 
			        echo '<tr> 
			                  <td>'.$crimeCode.'</td> 
			                  <td>'.$description.'</td> 
			                  <td>'.$crimeLocation.'</td> 
			                  <td>'.$dateReceived.'</td> 
			                  <td>'.$reporterId.'</td>
			                  <td>'.$moreDetails.'</td>
			                  <td>'.$status.'</td>
			                  <td>'.$lastUpdate.'</td>
			              </tr>';
			    }
			   # $_SESSION["$crimeCode"]=$crimeCode;
			    $result->free();
			}else{
				echo "no records";
			}

			?>
        </div>
        
    </div> 
</body>
</html>