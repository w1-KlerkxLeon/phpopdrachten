<?php
/*
 *  User:   Leon Klerkx
 *  Date:   19-3-2020
 *  Time:   20:45 uur
 *  File:   opdracht_5.1.php
 */
?>

<?php
    //Header includen
    include "../../Includes/header.php";
    //Menu includen
    include "../../Includes/menu.php";
?>

<?php
    //Titel
    echo "<h1>Restaria Kees Kroket</h1>";

    //Adresgegevens
    echo "Visstraat 42 <br>";
    echo "5211 DN 's-Hertogenbosch <br>";
    echo "073 613 6720 <br>";
    echo "info@restariakeeskroket.nl";

    //Formulier
    echo "<form action='form_data.php' method='get'>";

    echo "<fieldset>";
    //Bedrijfsnaam
    echo "<p><label for='bedrijfsnaam'>Bedrijfsnaam</label></p>";
    echo "<input type='text' name='bedrijfsnaam' id='bedrijfsnaam'>";
    
    //Voornaam
    echo "<p><label for='voornaam'>Voornaam<span class='verplichtVeld'>*</span></label></p>";
    echo "<input type='text' name='voornaam' id='voornaam' required>";

    //Achternaam;
    echo "<p><label for='achternaam'>Achternaam <span class='verplichtVeld'>*</span></label></p>";
    echo "<input type='text' name='achternaam' id='achternaam' required>";

    //Telefoon
    echo "<p><label for='telefoonnummer'>Telefoon</label></p>";
    echo "<input type='text' name='telefoonnummer' id='telefoonnummer'>";

    //E-mail
    echo "<p><label for='e-mail'>E-mail <span class='verplichtVeld'>*</span></label></p>";
    echo "<input type='text' name='e-mail' id='e-mail' required>";

    //Bericht
    echo "<p><label for='bericht'>Bericht</label></p>";
                                            //cols = breedte  rows = hoogte
    echo "<textarea name='bericht' id='bericht' cols='50' rows='5'> </textarea> <br>";

    //Verstuur button
    echo "<input type='submit' value='Versturen'>";

    echo "</fieldset>";
    //Formulier afsluiten
    echo "</form>";
?>

<?php
    //Footer includen
    include "../../Includes/footer.php";
?>
