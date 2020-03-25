<?php
/*
 *  User:   Leon Klerkx
 *  Date:   22-3-2020
 *  Time:   13:10 uur
 *  File:   uitschrijvingen.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";
?>

<?php
    //Titel
    echo "<h1>Uitschrijfformulier KW1C Verstuurd</h1>";
    echo "<hr>";
    echo "<table id='form_sent'>";
        //Voor en achternaam
        echo "<tr><td><label for='naam'>Voor en achternaam</label></td>";
        echo "<td>" . $_GET["naam"] . "</td></tr>";
//if(isset($firstname) && !empty($firstname)) { --> required is hetzelfde
        //Studentnummer
        echo "<tr><td><label for='studentnummer'>Studentnummer</label></td>";
        echo "<td>" . $_GET["studentnummer"] . "</td></tr>";
        //Datum van uitschrijving
        echo "<tr><td><label for='datumUitschrijving'>Datum van uitschijving</label></td>";
        echo "<td>" . $_GET["datumUitschrijving"] . "</td></tr>";
        //Reden van uitschrijving
        echo "<tr><td><label for='redenUitschrijving'>Reden van uitschrijving</label></td>";
        echo "<td>" . $_GET["redenUitschrijving"] . "</td></tr>";
        //Leerjaar
        echo "<tr><td><label>Leerjaar</label></td>";
        echo "<td>" . $_GET["leerjaar"] . "</td></tr>";

        //Aanmelden bij de succesklas
        echo "<tr><td><label>Aanmelden bij de succesklas</label></td>";

        //Isset = Als het veld bestaat
        //Checkbox 'aanmelden succesklas' aangevinkt
        if(isset($_GET["aanmeldingSuccesklas"]))
        {
            echo "<td>JA</td>";
        }
        //Checkbox 'aanmelden succesklas' NIET aangevinkt
        else
        {
            echo "<td>Er is niet aangemeld voor de succesklas</td></tr>";
        }

        //Verwijderen gegevens
        echo "<tr><td><label>Verwijderen gegevens</label></td>";
        //Checkbox 'verwijder gegevens' aangevinkt
        if(isset($_GET['verwijderGegevens']))
        {
            echo "<td>JA</td>";
        }
        //Checkbox 'verwijder gegevens' NIET aangevinkt
        else
        {
            echo "<td>Gegevens hoeven niet te worden verwijderd</td>";
        }

        // Bericht reden uitschrijving
        echo "<tr><td><label>Reden van uitschrijving</label></td></tr>";
        echo "<tr><td>" . $_GET["berichtUitschrijving"] . "</td></tr>";

    //Tabel afsluiten
    echo "</table>";

?>

<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>