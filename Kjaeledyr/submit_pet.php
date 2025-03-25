<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $species = $conn->real_escape_string($_POST['species']);
    $age = (int)$_POST['age'];

    $sql = "INSERT INTO pets (name, species, age) VALUES ('$name', '$species', '$age')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?message=New pet registered successfully');
        exit();
    } else {
        header('Location: index.php?message=Error: ' . $conn->error);
        exit();
    }
}
?>
</body>
</html>