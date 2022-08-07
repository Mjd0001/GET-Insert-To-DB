<html>
<head>
    <title>Insert Page</title>
</head>
<body>
<?php

$data = $_GET["number"]; 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sensor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sensor_values (data)
VALUES ('$data')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>