<html>

<head>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <title></title>
</head>

<body>
  <h1>ศูนย์RDC</h1>
  <?php
  // $host = '43.229.78.39';
  // $username = 'root';
  // $password = '';
  // $database = 'zdean_star2dc';
  // $port = '3306';

  // $connect = mysqli_connect($host, $username, $password, $database, 3306);
  // if (mysqli_connect_error($connect)) {
  //   echo 'เชื่อต่อไม่ได้ ' . mysqli_connect_error();
  // }
  // $result = mysqli_query($connect, "SELECT * FROM store_rdc");
  // while($row = mysqli_fetch_array($result)){
  //   echo $row['rdcId']. ' ' .$row['rdcCustomer']. ' ' .$row['rdcName']. ' ' .$row['rdcAddr']. ' ' .$row['rdcTel']. ' ' .$row['rdcFax']. ' ' .$row['rdcProvince'];
  // }

  // OPPs method
  $servername = "43.229.78.39";
  $username = "root";
  $password = "";
  $dbname = "zdean_star2dc";

  // Create connection
  $conn = new mysqli('43.229.78.39', 'dean', 'zdean_star2dc', 'zdean_star2dc', 3306);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // $sql->query("set names utf8");
  $sql = "SELECT * FROM store_rdc";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
       echo $row['rdcId'] . '<br/>' . $row['rdcCustomer'] . ' ' . $row['rdcName'] . ' ' . $row['rdcAddr'] . ' ' . $row['rdcTel'] . ' ' . $row['rdcFax'] . ' ' . $row['rdcProvince'];
    }
  } else {
    echo "0 results";
  }

  $conn->close();
  ?>
</body>

</html>