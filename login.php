<?php

session_start();

$mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}else{

	$idn = $_POST['idno'];
    $passw = $_POST['password'];


	if (empty($idn)|empty($passw)) {
		echo '<script type="text/javascript">alert("Empty value");window.location=\'login.html\';</script>';
		# code...
	}else{
		if (strlen($idn)>7) {
			$idno= $idn;
			# code...
		}else{
			echo '<script type="text/javascript">alert("Enter a valid id no");window.location=\'login.html\';</script>';

		}
		if (strlen($passw)>6) {
			$password = $passw;
			# code...
		}else{
			echo '<script type="text/javascript">alert("Enter valid passowrd");window.location=\'login.html\';</script>';

		}
	}


	mysqli_select_db($mysqli,"public_register");
	$RESULT4="select * from public_register where idno='$idno' and password='$password' ";
	$RESULT=mysqli_query($mysqli,$RESULT4);
	$ROW=mysqli_fetch_array($RESULT);
	if($ROW['idno']==$idno && $ROW['password']==$password){

		$_SESSION["idno"]=$idno;
		echo '<script type="text/javascript">alert("Login success");window.location=\'RegUser/report.php\';</script>';
		//header("location:RegUser/report.php");

	}else{
		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.html\';</script>';
			//header("location:login.html");
	}
	$mysqli->close();
}
?>