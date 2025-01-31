<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['First_name'] = $_POST['First_name'];
    $_SESSION['Last_name'] = $_POST['Last_name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['email'] = $_POST['email'];
    header('Location: profil.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
</head>
<body>
<meta charset="UTF-8">
    <h1>Edit Profile</h1>
    <link rel="stylesheet" href="style.css">
    <form method="POST" action="rediger.php">

        <label for="First_name">name:</label>
        <input type="text" id="First_name" name="First_name" value="<?php if(isset($_SESSION["First_name"])){echo $_SESSION["First_name"];}?>" required>

        <label for="Last_name">name:</label>
        <input type="text" id="Last_name" name="Last_name" value="<?php if(isset($_SESSION["Last_name"])){echo $_SESSION["Last_name"];}?>" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required min="0" max="120" value="<?php if(isset($_SESSION["age"])){echo $_SESSION["age"];}?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];}?>" required>
        <button type="submit" name="submit">Update Profile</button>
    </form>
</body>
</html>