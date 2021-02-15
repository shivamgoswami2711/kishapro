<!DOCTYPE html>
<html>
<body>

<?php
$host = "localhost";
$user = "root";
$password = "Shivam@6162";
$databaseName = "userdb";

$mysqli = new mysqli($host,$user,$password,$databaseName);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST["name"];
      $lastname = $_POST["lastname"];
      $age = $_POST["age"];
      $number = $_POST["number"];
      echo $_POST["name"];
      $sql = "INSERT INTO kisan (name, lastname,age,number)
            VALUES ('$name', '$lastname', '$age', '$number')";
      $mysqli->query($sql);
      echo "New record created successfully";
}


// retrieve data 
$sql = "SELECT * FROM kisan";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["lastname"]. " " . $row["age"]. " " . $row["number"] . "<br>";
    }
} else {
    echo "0 results";
}


$mysqli->close();
?>

</body>
</html>