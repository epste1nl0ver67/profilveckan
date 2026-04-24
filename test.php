<?php

$conn = new mysqli("localhost", "epste1nl0ver67", "Epste1nLever67!", "databas1");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titel = $_POST["titel"];
    $beskrivning = $_POST["beskrivning"];
    $sql = "INSERT INTO tabell1 (name, password) VALUES ('$titel', '$beskrivning')";

    $conn->query($sql);
}

?>

<form method="POST">
    Titel: <input type="text" name="titel" required><br><br>
    Beskrivning:<br>
    <textarea name="beskrivning" rows="5" cols="40"></textarea><br><br>
    <input type="submit" value="Skicka">
</form>