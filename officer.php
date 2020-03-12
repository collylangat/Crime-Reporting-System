<?php

$mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}else{
    $officerNo = $_POST['officerNo'];
    $password = $_POST['password'];
    mysqli_select_db($mysqli,"officer_register");
    $RESULT4="select * from officer_register where officerNo='$officerNo' and password='$password' ";
    $RESULT=mysqli_query($mysqli,$RESULT4);
    $ROW=mysqli_fetch_array($RESULT);
    if($ROW['officerNo']==$officerNo && $ROW['password']==$password){
      echo '<script type="text/javascript">alert("Login succesfully");window.location=\'admin/homepage.php\';</script>';
    }else{
      echo '<script type="text/javascript">alert("Incorrect password");window.location=\'officer.html\';</script>';
    }
}
    $mysqli->close();
?>
