<?php 
session_start();
$_SESSION['innlogging'] = false;
header('Location: index.php');
        exit;
?>