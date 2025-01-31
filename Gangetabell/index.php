
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gangetabell</title>
    <link rel="stylesheet" href="style.css">
    <style>
    table {
        width: 50%;
        margin: 20px auto;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        text-align: center;
    }
    input[type="number"] {
        width: 50px;
        text-align: center;
    }
    </style>
</head>
<body>
<a href="http://localhost/Emil/" class="home-link">Tilbake til Hjem</a>
    <form method="post">
        <label for="number">skriv et tall:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">generer en tabell</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$number</td><td>x</td><td>$i</td><td>=</td><td>" . ($number * $i) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>