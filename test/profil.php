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
<h1>Profil</h1>
<p>Navn: <?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'Ikke satt'; ?></p>
    <p>Alder: <?php echo isset($_SESSION['age']) ? htmlspecialchars($_SESSION['age']) : 'Ikke satt'; ?></p>
    <p>E-post: <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Ikke satt'; ?></p>
    <a href="rediger.php">Rediger Profil</a>
    <a href="index.php" class="home-link">Tilbake til Hjem</a>
</body>
</html>