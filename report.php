<!DOCTYPE html>
<html>
<head>
  <title>Crime City</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="container">
  <div id="worldimage"><img src="img/Head.jpg"></div>
    <div id="menu">
      <nav background-color="blue">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="news.html">NEWS</a></li>
        <li><a href="">REPORT</a></li>
        <li><a href="login.html">LOGIN</a></li>
        <li><a href="contact.html">CONTACT US</a></li>
      </ul>
      </nav>
    </div>
    <div id="sideimage">
      <img src="img/home.jpg">
    </div>
        <div id="boxlogin">
        <form method="post" action="#">
          <H3>REPORT</H3>
          <h2>Crime type</h2>
          <select name="crimeType">
            <option>Select crime type</option>
            <option value="rape">Rape</option>
            <option value="mobjustice">Mob justice</option>
            <option value="theft">Theft</option>
            <option value="drugs">Drugs</option>
            <option value="other">Other</option>
          </select>
          <select name="location">
            <option> SELECT CRIME LOCATION</option>
            <option value="MoiRoad">Moi road</option>
            <option value="KenyattaRoad">Kenyatta road</option>
            <option value="milimani">milimani</option>
            <option value="kiganjo">Kiganjo</option>
            <option value="kericho">Kericho</option>
          </select>
          <input type="text" name="moreDetails">
          <input type="submit" name="submit" value="SUBMIT">
        </form>      
        </div>
        <div id="bottomimage">
          <img src="img/banner2.jpg">
        </div>

    </div> 

<?php
if(isset($_POST['submit'])){
	$selectedCrimeType = $_POST['crimeType'];
	$selectedCrimeLocation =$_POST['location'];
	$crimeCode = "CR783";
	$dateReceived = "1990-02-02";
	$reporterId = 23;
	$moreDetails = $_POST['moreDetails'];


	//date
	$now = new DateTime();
	$formatedDay= $now->format("Y-m-j H:i:s");


	$conn = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');
	if(mysqli_connect_error()){
			die("Connect Error ". $conn->connect_error);
	}else{
		$sql = "INSERT INTO crime_report (crimeCode,description,crimeLocation,dateReceived,reporterId,moreDetails) VALUES ('$crimeCode','$selectedCrimeType','$selectedCrimeLocation','$formatedDay','$reporterId','$moreDetails')";

	if ($conn->query($sql)===TRUE){
		echo "new record";
	}
	}
}
?>
</body>
</html>