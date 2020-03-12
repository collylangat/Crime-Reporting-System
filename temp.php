<?php

$mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}else{
    $offficerNo = $_POST['offficerNo'];
    $password = $_POST['password'];
    mysqli_select_db($mysqli,"officer_register");
    $RESULT4="select * from officer_register where officerNo='$offficerNo' and password='$password'";
    $RESULT=mysqli_query($mysqli,$RESULT4);
    $ROW=mysqli_fetch_array($RESULT);
    if($ROW['offficerNo']==$offficerNo && $ROW['password']==$password){
      echo '<script type="text/javascript">alert("Empty value");window.location=\'admin/index.html\';</script>';
    }else{
      echo'<script language="javascript">';
      echo 'alert("incorrect details")';
      echo'</script>';
      header("location:index.html");
    }
}
    $mysqli->close();
?>
