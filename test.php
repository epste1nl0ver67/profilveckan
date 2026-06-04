<?php

$conn = new mysqli("localhost", "epste1nl0ver67", "Epste1nLever67!", "databas1");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Username= $_POST["username"];
    $Password = $_POST["password"];
    $sql = "INSERT INTO tabell1 (name, password) VALUES ('$Username', '$Password')";

    $conn->query($sql);
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulär</title>
</head>
<body>
  <form method="POST" action="test.php">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Skicka">
  </form>
</body>
</html>