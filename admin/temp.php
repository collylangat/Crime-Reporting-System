<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <?php 
 
$mysqli = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'crime'); 
$query = "SELECT * FROM crime_report";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td>
          <td> <font face="Arial">Value6</font> </td>
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
          $crimeCode = $row['crimeCode'];
          $description = $row['description'];
          $crimeLocation = $row['crimeLocation'];
          $dateReceived = $row['dateReceived'];
          $reporterId = $row['reporterId'];
          $moreDetails = $row['moreDetails']; 
 
        echo '<tr> 
                  <td>'.$crimeCode.'</td> 
                  <td>'.$description.'</td> 
                  <td>'.$crimeLocation.'</td> 
                  <td>'.$dateReceived.'</td> 
                  <td>'.$reporterId.'</td>
                  <td>'.$moreDetails.'</td>
              </tr>';
    }
    $result->free();
} 
?>

</body>
</html>