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
            <option value="Accident">Accident</option>
            <option value="drugs">Other</option>
          </select><br>
          <input id="submitbtn" type="submit" name="submit" value="SUBMIT">
        </form>
        <?php
              if(isset($_POST['submit'])){
                $selectedCrimeType = $_POST['crimeType'];


                if ($selectedCrimeType=="Accident") {
                  echo '<script type="text/javascript">window.location=\'accident.html\';</script>';
                  # code...
                }else{
                  echo '<script type="text/javascript">window.location=\'report.php\';</script>';
                }
                }
          ?>    
        </div>
        <div id="bottomimage">
          <img src="../img/banner2.jpg">
        </div>

    </div>
    </body>
</html>