<?php
$crimeCode = $_POST['crimeCode'];
$status = $_POST['status'];


$now = new DateTime();
$lastUpdate=$now->format("Y-m-j H:i:s");


$mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');
$sql = "UPDATE crime_report SET status = '" . $status . "',lastUpdate='" .$lastUpdate. "' WHERE crime_report.crimeCode = '" . $crimeCode . "' ";
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}else{
  if ($mysqli->query($sql)==TRUE) {
    echo '<script type="text/javascript">alert("Update succesfully");window.location=\'homepage.php\';</script>';
    # code...
  }else{
    echo '<script type="text/javascript">alert($lastUpdate);window.location=\'update.html\';</script>';
    
  }
}
$mysqli->close();
?>