<?php
    if(isset($_POST["submit"])){
    $naam = $_POST["naam"];
    $land = $_POST["land"];
    }
?>

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
        <option value="keuze" <?php if($land=='') echo 'selected';?> >Maak uw Keuze!</option>
        <option value="NL" <?php if($land=='NL') echo 'selected';?>>Nederland</option>
        <option value="DE" <?php if($land=='DE') echo 'selected';?>>Duitsland</option>
        <option value="EN" <?php if($land=='EN') echo 'selected';?>>Engeland</option>
        <option value="IT" <?php if($land=='IT') echo 'selected';?>>Italie</option>
        <option value="FR"<?php if($land=='FR') echo 'selected';?>>Frankrijk</option>
        <option value="SP"<?php if($land=='SP') echo 'selected';?>>Spanje</option>
</select>
<br>
<input type="submit" name="submit" value="Gegevens versturen" />

    </form>
    
    <?php
    if(isset($_POST["submit"])){

    switch ($land) {
        case 'NL':
            echo 'Goedemorgen ' .$naam;
            break;

    
        case 'DE':
            echo 'Gutenmorgen ' .$naam;
            break;

        case 'EN':
            echo 'Good Morning ' .$naam;
            break;

        case 'IT':
            echo 'Italiaans ' .$naam;
            break;

        case 'FR':
            echo 'Frans ' .$naam;
            break;

        case 'SP':
            echo 'Spaans ' .$naam;
            break;
        
        default:
            Echo 'U heeft geen land geselecteerd';
            break;
    }
}
        
        
    
// if(isset($_POST["submit"])){
    // $naam = $_POST["naam"];
    // $land = $_POST["land"]; 

    // if($land=='NL') {
        //    echo 'Goedemorgen ' .$naam;
    // }

    // elseif($land=='DE') {
        //    echo 'Guten Morgen ' .$naam;
    // }

    // elseif($land=='EN') {
        //    echo 'Good morning ' .$naam;
    // }

    // elseif($land=='IT') {
        //    echo 'italiaanse tekst ' .$naam;
    // }

    // elseif($land=='SP') {
        //    echo 'spaanse tekst ' .$naam;
    // }

    // elseif($land=='FR') {
        //    echo 'franse tekst ' .$naam;
    // }

    // elseif($land='keuze') {
        // echo 'U heeft geen land geselecteerd';
    // } 
//    }


        ?>
    
</body>
</html>