<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ศูนย์RDC</title>
</head>
<body>
<h1>ศูนย์RDC</h1>
  <?php
  $servername = "43.229.78.39";
  $username = "root";
  $password = "";
  $dbname = "zdean_star2dc";

   $conn = new mysqli('43.229.78.39', 'dean', 'zdean_star2dc', 'zdean_star2dc', 3306);
  
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
   $sql = "SELECT * FROM store_rdc";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) {
       echo $row['rdcId'] . ' <br>' . $row['rdcCustomer'] . ' ' . $row['rdcName'] . ' ' . $row['rdcAddr'] . ' ' . $row['rdcTel'] . ' ' . $row['rdcFax'] . ' ' . $row['rdcProvince'];
    }
  } else {
    echo "0 results";
  }

  $conn->close();
  ?>
</body>
</html>