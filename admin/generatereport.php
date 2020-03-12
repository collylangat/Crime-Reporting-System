<!DOCTYPE html>
<html>
<head>
  <title>Crime City</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <style type="text/css">
  table{
    
    border-collapse: collapse;
  }
    table th{
      background-color: #252a72;
      color: white;
      border-style: solid;
      width: 170px;

    }
    table, th, td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <div id="container">
  <div id="worldimage"><img src="../img/Head.jpg"></div>
    <div id="menu">
      <nav background-color="blue">
      <ul>
        <li><a href="../report.php">HOME</a></li>
        <li><a href="../news.html">NEWS</a></li>
        <li><a href="generatereport.php">GENERATE REPORT</a></li>
        </div></li>
      </ul>
      </nav>
    </div>
  </div>
  <div id="sideimage">
    </div>
        <div id="boxlogin">



          <?php

      $mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime');
      $query = "SELECT crimeLocation, count(*) FROM crime_report group by crimeLocation order by count(*) desc";
      echo '<table border="0" cellspacing="2" cellpadding="2"> 
            <tr> 
                <th> <font face="Arial">Crime Location</font> </th> 
                <th> <font face="Arial">Count</font> </th>
            </tr>';
 
      if ($result = $mysqli->query($query)) {
          while ($row = $result->fetch_assoc()) {
                $idno = $row['crimeLocation'];
                $phonenumber = $row['count(*)']; 
       
              echo '<tr> 
                        <td>'.$idno.'</td> 
                        <td>'.$phonenumber.'</td>
                    </tr>';
          }
          $result->free();
      } 

$query1 = "SELECT description, count(*) FROM crime_report group by description order by count(*) desc";

      echo '<table border="0" cellspacing="2" cellpadding="2"> 
            <tr> 
                <th> <font face="Arial">Crime Type</font> </th> 
                <th> <font face="Arial">Count</font> </th>
            </tr>';
 
      if ($result = $mysqli->query($query1)) {
          while ($row = $result->fetch_assoc()) {
                $idno = $row['description'];
                $phonenumber = $row['count(*)']; 
       
              echo '<tr> 
                        <td>'.$idno.'</td> 
                        <td>'.$phonenumber.'</td>
                    </tr>';
          }
          $result->free();
      }

  ?>
</body>
</html>