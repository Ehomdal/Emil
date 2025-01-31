<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
?>
<h1>Profile</h1>
<p>firstname: <?php echo isset($_SESSION['First_name']) ? htmlspecialchars($_SESSION['First_name']) : 'Ikke satt'; ?></p>
<p>Surname: <?php echo isset($_SESSION['Last_name']) ? htmlspecialchars($_SESSION['Last_name']) : 'Ikke satt'; ?></p>
    <p>age: <?php echo isset($_SESSION['age']) ? htmlspecialchars($_SESSION['age']) : 'Ikke satt'; ?></p>
    <p>Email: <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Ikke satt'; ?></p>
    <a href="rediger.php">Edit Profile</a>
    <a href="index.php" class="home-link">Back to Home</a>
</body>
</html>