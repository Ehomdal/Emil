<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hvem er eldst?</title>
    <style>
        
        body {
            background-color: #281555; /* Mørk magenta */
            color: white; /* Hvit tekst for god kontrast */
            font-family: Arial, sans-serif; /* Enkel font */
            text-align: center; /* Sentrer tekst */
            padding: 50px; /* Gir litt plass rundt innholdet */
        }
        input {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
            border: 2px solid #fff; /* Hvit kant rundt input-feltene */
            background-color: #333; /* Mørk bakgrunn for inputfeltene */
            color: white; /* Hvit tekst i input-feltene */
        }
        button {
            padding: 10px 20px;
            background-color: #fff; /* Hvit bakgrunn for knappen */
            color: #281555; 
            border: none;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #281555; /* Mørk lilla bakgrunn på knapp når musen er over */
            color: white; /* Hvit tekst på knappen når den er hoveret */
        }
        .home-link {
            color: white; /* Hvit farge på lenken */
            font-size: 18px;
            text-decoration: none; /* Fjern understreking */
            margin-bottom: 20px;
            display: inline-block;
        }
        .home-link:hover {
            text-decoration: underline; /* Understreking på hover */
        }
    </style>
</head>
<body>
     <!-- Home-lenke -->
     <a href="http://localhost/Emil/" class="home-link">Tilbake til Hjem</a>
<h1>Finn ut hvem som er eldst!</h1>
<form method="POST">
    <label for="henrik">Henriks alder:</label><br>
    <input type="number" id="henrik" name="henrik" min="0" max="110" required><br><br>
    
    <label for="kari">Karis alder:</label><br>
    <input type="number" id="kari" name="kari" min="0" max="110" required><br><br>
    
    <button type="submit">Sjekk alder</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Henter alderen fra input-feltene
    $henrik_alder = isset($_POST['henrik']) ? $_POST['henrik'] : null;
    $kari_alder = isset($_POST['kari']) ? $_POST['kari'] : null;

    // Sjekk om alderen er innenfor gyldige grenser
    if ($henrik_alder < 0 || $henrik_alder > 110 || $kari_alder < 0 || $kari_alder > 110) {
        echo "<h2>Vennligst oppgi en alder mellom 0 og 110 for både Henrik og Kari.</h2>";
    } else {
        // Sammenligner alderen på Henrik og Kari
        if ($henrik_alder > $kari_alder) {
            echo "<h2>Henrik er eldst.</h2>";
        } elseif ($kari_alder > $henrik_alder) {
            echo "<h2>Kari er eldst.</h2>";
        } else {
            echo "<h2>Henrik og Kari er like gamle.</h2>";
        }
    }
}
    ?>
    
</body>
</html>


