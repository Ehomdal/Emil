<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="http://localhost/Emil/" class="home-link">Back to Home</a>
<?php
require 'db.php';

if (isset($_GET['message'])) {
    echo "<p>" . htmlspecialchars($_GET['message']) . "</p>";
}

// Fetch all pets
$sql = "SELECT name, species, age FROM pets";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo "<h2>Registered Pets</h2>";
        echo "<table border='1'><tr><th>Name</th><th>Species</th><th>Age</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . htmlspecialchars($row["name"]) . "</td><td>" . htmlspecialchars($row["species"]) . "</td><td>" . htmlspecialchars($row["age"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

$conn->close();
?>

<h2>Register New Pet</h2>
<form method="post" action="submit_pet.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="species">Species:</label>
    <input type="text" id="species" name="species" required>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>
    
    <input type="submit" value="Register">
</form>
</body>
</html>