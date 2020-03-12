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
    #formbox{
 
      height: 400px;
      text-align: center;
    }
    #formbox h2{
      font-size: 17px;
      padding-top: 0;


    }
    #moreDetails{
      height: 100px;
      width: 300px;
    }
    .selections{
      width: 300px;
      height: 30px;
    }
    #submitbtn{
      background-color: #3f48cc;
      border-radius: 20px;
      height: 40px;
      width: 400px;
    }
    #bottomimage{
      position: relative;
      top:470px;
      left: 0px;
    }
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
        <form method="post" action="#" id="formbox">
          <h2>REPORT</h2>
          <h2>Crime type</h2>
          <select class="selections" name="crimeType">
            <option>Select crime type</option>
            <option value="rape">Rape</option>
            <option value="mobjustice">Mob justice</option>
            <option value="theft">Theft</option>
            <option value="drugs">Drugs</option>
            <option value="other">Other</option>
          </select><br><br>
          <h2>Location</h2>
          <select class="selections" name="location">
            <option> SELECT CRIME LOCATION</option>
            <option value="MoiRoad">Moi road</option>
            <option value="KenyattaRoad">Kenyatta road</option>
            <option value="milimani">milimani</option>
            <option value="kiganjo">Kiganjo</option>
            <option value="kericho">Kericho</option>
          </select><br><br>
          <input id="moreDetails" type="text" name="moreDetails" placeholder="Leave a comment"><br><br>
          <input id="submitbtn" type="submit" name="submit" value="SUBMIT">
        </form>      
        </div>
        <div id="bottomimage">
          <img src="../img/banner2.jpg">
        </div>

    </div> 

<?php
if(isset($_POST['submit'])){
	$selectedCrimeType = $_POST['crimeType'];
	$selectedCrimeLocation =$_POST['location'];
#	$crimeCode = "CR799";
#	$dateReceived = "1990-02-02";
	$reporterId = $_SESSION["idno"];
	$moreDetails = $_POST['moreDetails'];
  $status="not found";


$random = mt_rand(10,500);
$crimeCode = "CR";
$crimeCode .=$random;
  


	//date
	$now = new DateTime();
	$formatedDay= $now->format("Y-m-j H:i:s");
  $lastUpdate=$now->format("Y-m-j H:i:s");


	$conn = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');
	if(mysqli_connect_error()){
			die("Connect Error ". $conn->connect_error);
	}else{
		$sql = "INSERT INTO crime_report (crimeCode,description,crimeLocation,dateReceived,reporterId,moreDetails,status,lastUpdate) VALUES ('$crimeCode','$selectedCrimeType','$selectedCrimeLocation','$formatedDay','$reporterId','$moreDetails','$status','$lastUpdate')";

	if ($conn->query($sql)===TRUE){
    echo '<script type="text/javascript">alert("Report successfully submitted");window.location=\'cases.php\';</script>';
	}else{
    echo '<script type="text/javascript">alert("Report unsuccessfully submitted");</script>';
  }
	}
}
?>
</body>
</html>