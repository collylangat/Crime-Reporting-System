<?php
if(isset($_POST['submit'])){
	$selectedCrimeType = $_POST['crimeType'];
	$selectedCrimeLocation =$_POST['location'];
	$crimeCode = "CR790";
	$dateReceived = "1990-02-02";
	$reporterId = $_SESSION["idno"];
	$moreDetails = $_POST['moreDetails'];
  $status="not found";
  


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
    echo '<script type="text/javascript">alert("Report successfully submitted");</script>';
	}else{
    echo '<script type="text/javascript">alert("Report unsuccessfully submitted");</script>';
  }
	}
}
?>
