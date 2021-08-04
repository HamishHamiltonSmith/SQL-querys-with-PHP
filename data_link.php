
<h1> RESULTS <h1>
<br>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Users";
$id = $_GET["id"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, User FROM Users WHERE id = " . $id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Id: " . $row["id"]. "        Username: " . $row["User"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
