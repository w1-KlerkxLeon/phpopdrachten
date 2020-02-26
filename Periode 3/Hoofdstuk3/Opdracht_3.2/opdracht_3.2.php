<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";
?>

<main id="wrapper">
    <!--Titel-->
    <h2>
        Uitwerkingen
    </h2>
      <?php
        //Taak 1
        //Aanmaken variabelen
        $trafficLightColor = "groen";
        $ambulanceComing = false;
        $driveOn = true;

        //Taak 2 deel 1: doorrijden of stoppen bij stoplicht?
        //if/else

        //Ambulance komt of groen stoplicht = stoppen
        if($ambulanceComing == true && $trafficLightColor == "groen")
        {
            $driveOn = false;
        }
        //Ambulance komt of rood stoplicht = stoppen
        else if($ambulanceComing == true && $trafficLightColor == "rood")
        {
            $driveOn = false;
        }
        //Ambulance komt of oranje stoplicht = stoppen
        else if($ambulanceComing == true && $trafficLightColor == "oranje")
        {
            $driveOn = false;
        }
        //Ambulance komt niet en groen stoplicht = doorrijden
        else if($ambulanceComing == false && $trafficLightColor == "groen")
        {
            $driveOn = true;
        }
        //Ambulance komt niet en rood stoplicht = stoppen
        else if($ambulanceComing == false && $trafficLightColor == "rood")
        {
            $driveOn = false;
        }
        //Ambulance komt niet en oranje stoplicht = stoppen
        else if($ambulanceComing == false && $trafficLightColor == "oranje")
        {
            $driveOn = false;
        }

        //echo $variabel = true == 1 op een website. Moet zonder echo net als hierboven

        //Als je mag doorrijden
        if($driveOn == true)
        {
            echo "<p class='groen'>U mag doorrijden</p>";
        }
        //Als je moet stoppen
        else if($driveOn == false)
        {
            echo "<p class='rood'>U moet stoppen</p>";
        }

        //Taak 3 deel 2: vanaf welke leeftijd mag je drinken in verschillende landen?
        //Aanmaken variabelen
        $countryName = "Nederland";
        $currentAge = 19;

        //Moet je in Echo <p> gebruiken of mag je ook zonder <p>?

        //Woonplaats België en je bent tussen 16 en 17 jaar oud
        if($countryName == "België" && $currentAge >= 16 && $currentAge <= 17)
        {
            echo "Je woont in België en bent " . $currentAge . " jaar oud. <br>";
            echo "Je mag hier zwakke alcohol drinken.";
        //  echo "Laag alcoholpromilage";
        }
        //Woonplaats België en je bent ouder dan 18 jaar oud
        else if($countryName == "België" && $currentAge >= 18)
        {
            echo "Je woont in België en bent " . $currentAge . " jaar oud. <br>";
            echo "Je mag hier sterke alcohol drinken.";
        }
        //Woonplaats Bulgarije en je bent ouder dan 18 jaar oud
        else if($countryName == "Bulgarije" && $currentAge >= 18)
        {
            echo "Je woont in Bulgarije en bent " . $currentAge . " jaar oud. <br>";
            echo "Je mag hier zwakke én sterke alcohol drinken.";
        }
        //Woonplaats Cyprus en je bent ouder dan 17 jaar oud
        else if($countryName == "Cyprus" && $currentAge >= 17)
        {
            echo "Je woont in Cyprus en bent " . $currentAge . " jaar oud.<br>";
            echo "Je mag hier zwakke én sterke alcohol drinken.";
        }
        //Woonplaats Nederland en je bent ouder dan 18 jaar oud
        else if($countryName == "Nederland" && $currentAge >= 18)
        {
            echo "Je woont in Nederland en bent " . $currentAge . " jaar oud.<br>";
            echo "Je mag hier zwakke én sterke alcohol drinken.";
        }
        //Woonplaats Zweden en je bent 18 jaar oud
        else if($countryName == "Zweden" && $currentAge >= 18 && $currentAge <= 19)
        {
            echo "Je woont in Zweden en bent " . $currentAge . " jaar oud.<br>";
            echo "Je mag hier zwakke alcohol drinken.";
        }
        //Woonplaats Zweden en je bent 20 jaar oud
        else if($countryName == "Zweden" && $currentAge >= 20)
        {
            echo "Je woont in Zweden en bent ". $currentAge . " jaar oud.<br>";
            echo "Je mag hier sterke alcohol drinken";
        }
    ?>
</main>
<?php
    include "../../Includes/footer.php";
?>
