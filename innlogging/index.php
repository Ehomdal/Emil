<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <a href="http://localhost/Emil/Emil" class="home-link">Back to Home</a>
</head>
<body>
<form method="post" action="login.php">
    <table>
    <tr><td><label for="brukernavn">Brukernavn:</label></td>
    <td><input type="text" id="brukernavn" name="brukernavn" required><br></tr></td>
    
    <tr><td><label for="passord">Passord:</label></td>
    <td><input type="password" id="passord" name="passord" required><br></tr></td>
    </table>

    <button type="submit">Logg inn</button>
</form>


    <a href="logout.php"><button name="loggut">Logg ut </button></a> 
<?php
    session_start();

if ($_SESSION['innlogging'] == true) {
    echo "<p>Du er nå logget inn.</p>";
} else {
    echo "<p>Du er ikke logget inn.</p>";        
}
?>
</form>
</body>
</html>