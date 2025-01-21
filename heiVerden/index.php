<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "My first PHP script!";
?>
 <style>
        /* Mørk magenta bakgrunn og hvit tekst */
        body {
            background-color: #281555; /* Mørk magenta */
            color: white; /* Hvit tekst for god kontrast */
            font-family: Arial, sans-serif; /* Enkel, lesbar font */
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
            color: #281555; /* Mørk magenta tekstfarge på knappen */
            border: none;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #281555; /* Mørk magenta bakgrunn på knapp når musen er over */
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

</body>
</html>