<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['email'] = $_POST['email'];
    header('Location: profil.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Rediger Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Rediger Profil</h1>
    <form method="POST" action="rediger.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required minlength="2" value="<?php if(isset($_SESSION["first_name"])){echo $_SESSION["first_name"];}?>">

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php if(isset($_SESSION["last_name"])){echo $_SESSION["last_name"];}?>" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required min="0" max="120" value="<?php if(isset($_SESSION["age"])){echo $_SESSION["age"];}?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}?>" required>
        <button type="submit" name="submit">Update Profile</button>
    </form>
</body>
</html>