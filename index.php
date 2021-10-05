<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP opdracht - vertaler</title>
</head>
<body>
     <form method="post" action="">
Naam: <input type="text" name="naam" placeholder="Uw naam" required>
<br>
Land: <select name="land">
        <option value="keuze" selected >Maak uw Keuze!</option>
        <option value="NL">Nederland</option>
        <option value="DE">Duitsland</option>
        <option value="EN">Engeland</option>
        <option value="IT">Italie</option>
        <option value="FR">Frankrijk</option>
        <option value="SP">Spanje</option>
</select>
<br>
<input type="submit" name="submit" value="Gegevens versturen" />

    </form>
    
    <?php

if(isset($_POST["submit"])){
     $naam = $_POST["naam"];
     $land = $_POST["land"]; 

     if($land=='NL') {
            echo 'Goedemorgen ' .$naam;
     }

     elseif($land=='DE') {
            echo 'Guten Morgen ' .$naam;
     }

     elseif($land=='EN') {
            echo 'Good morning ' .$naam;
     }

     elseif($land=='IT') {
            echo 'italiaanse tekst ' .$naam;
     }

     elseif($land=='SP') {
            echo 'spaanse tekst ' .$naam;
     }

     elseif($land=='FR') {
            echo 'franse tekst ' .$naam;
     }

     elseif($land='keuze') {
         echo 'U heeft geen land geselecteerd';
     } 
    }

        ?>
    
</body>
</html>