<?php

session_start();
$idno = $_POST['idno'];
$phonenumb = $_POST['phonenumber'];
$passw = $_POST['password'];
/*
$validnum = substr($phonenumb, 0,2);

$isvalid = false;
if ($validnum == "07") {
	$isvalid=true;
	# code...
}

*/
$conn = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');
if(mysqli_connect_error()){
		die("Connect Error ". $conn->connect_error);
}else{
	if (empty($idno)||empty($phonenumb)||empty($passw)) {
		echo '<script type="text/javascript">alert("Empty value");window.location=\'register.html\';</script>';
		# code...
	}else {
		if (strlen($idno)>7) {
			$idno=$idno;
			# code...
		}else{
			echo '<script type="text/javascript">alert("Enter a valid id number");window.location=\'register.html\';</script>';
		}
		if (strlen($phonenumb)==10) {
			$phonenumber = $phonenumb;
			# code...
		}else{
			echo '<script type="text/javascript">alert("Enter a valid phone number start with 07xx xxx xx");window.location=\'register.html\';</script>';
		}
		if (strlen($passw)>6) {
			$password = $passw;
			# code...
		}else{
			echo '<script type="text/javascript">alert("Enter a password of more than 6 charaters");window.location=\'register.html\';</script>';
		}
		# code...
	}

	$sql = "INSERT INTO public_register (idno,phonenumber,password) VALUES ('$idno','$phonenumber','$password')";
	if ($conn->query($sql)===TRUE){
		$_SESSION["idno"]=$idno;
	echo '<script type="text/javascript">alert("Registered successfully");window.location=\'RegUser/report.php\';</script>';	
	}



}
?>