<?php 

session_start();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Crime City</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style type="text/css">
		.dropdown{
	      position: absolute;
	      width: 100px;
	      left: 80%;
	      border:solid;
	      height: 100px;
	      

	    }
	    .dropdown-content{
	      display: none;
	      z-index: 1;
	    }
	    .dropdown-content a{
	      display: block;
	      color: black;
	    }
	    .dropdown:hover .dropdown-content{
	      display: block;

	    }
	</style>
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
		<div id="sideimage">
			<img src="../img/home.jpg">
		</div>
		<div id="boxlogin">

			<?php
			$mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');
			$query = "SELECT * FROM public_register where idno='" . $_SESSION['idno'] . "' ";
			echo '<table border="0" cellspacing="2" cellpadding="2"> 
			      <tr> 
			          <td> <font face="Arial">idno</font> </td> 
			          <td> <font face="Arial">phone number</font> </td>
			      </tr>';
 
			if ($result = $mysqli->query($query)) {
			    while ($row = $result->fetch_assoc()) {
			          $idno = $row['idno'];
			          $phonenumber = $row['phonenumber']; 
			 
			        echo '<tr> 
			                  <td>'.$idno.'</td> 
			                  <td>'.$phonenumber.'</td>
			              </tr>';
			    }
			    $result->free();
			} 
			?>
		</div>
    </div> 
</body>
</html>