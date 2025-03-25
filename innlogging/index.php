<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilregister</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
<a href="http://localhost/Emil/" class="home-link">Back to Home</a>

<?php
session_start();

// Dummy user credentials for demonstration
$users = [
    'admin' => 'password123'
];

// Check if user is logging in
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
    } else {
        $error = "Invalid username or password.";
    }
}

// Check if user is logging out
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

// Check if user is adding a car
if (isset($_POST['add_car']) && isset($_SESSION['loggedin'])) {
    $car_make = $_POST['car_make'];
    $car_model = $_POST['car_model'];
    $car_year = $_POST['car_year'];

    // Here you would typically save the car details to a database
    $success = "Car registered successfully!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Registry</title>
</head>
<body>
    <?php if (isset($_SESSION['loggedin'])): ?>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <a href="index.php?logout=true">Logout</a>

        <h2>Register a Car</h2>
        <?php if (isset($success)) echo "<p>$success</p>"; ?>
        <form method="post" action="index.php">
            <label for="car_make">Car Make:</label>
            <input type="text" id="car_make" name="car_make" required><br>
            <label for="car_model">Car Model:</label>
            <input type="text" id="car_model" name="car_model" required><br>
            <label for="car_year">Car Year:</label>
            <input type="number" id="car_year" name="car_year" required><br>
            <input type="submit" name="add_car" value="Register Car">
        </form>
    <?php else: ?>
        <h1>Login</h1>
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
        <form method="post" action="index.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" name="login" value="Login">
        </form>
    <?php endif; ?>
</body>
</html>