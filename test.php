<?php
$conn = new mysqli("localhost", "epste1nl0ver67", "Epste1nLever67!", "databas1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];

echo "Connected successfully!";
}
?>

<form method="POST">
    Titel: <input type="text" name="titel" required><br><br>
    Beskrivning:<br>
    <textarea name="beskrivning" rows="5" cols="40"></textarea><br><br>
    <input type="submit" value="Skicka">
</form>