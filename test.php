<?php

$conn = new mysqli("localhost", "epste1nl0ver67", "Epste1nLever67!", "databas1");

$message = "";

// Register
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO tabell1 (name, password) VALUES ('$username', '$password')";
    if ($conn->query($sql)) {
        $message = "Account created!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

// Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM tabell1 WHERE name='$username'";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    if ($data && $data["password"] == $password) {
        $message = "Logged in as " . $data["name"] . "!";
    } else {
        $message = "Wrong username or password.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>

  <?php if ($message): ?>
    <p><?= $message ?></p>
  <?php endif; ?>

  <h3>Register</h3>
  <form method="POST" action="test.php">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="register" value="Register">
  </form>

  <br>

  <h3>Login</h3>
  <form method="POST" action="test.php">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
  </form>

</body>
</html>