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
    echo "<table>";
        //Bedrijfsnaam
        echo "<tr>";
            echo "<td>" . $_GET["bedrijfsnaam"] . "</td>";
        echo "</tr>";
        //Voornaam
        echo "<tr>";
            echo "<td>" . $_GET["voornaam"] . "</td>";
        echo "</tr>";
        //Achternaam
        echo "<tr>";
            echo "<td>" . $_GET["achternaam"] . "</td>";
        echo "</tr>";
        //Telefoonnummer
        echo "<tr>";
            echo "<td>" . $_GET["telefoonnummer"] . "</td>";
        echo "</tr>";
        //E-mail
        echo "<tr>";
            echo "<td>" . $_GET["e-mail"] . "</td>";
        echo "</tr>";
        //Bericht
        echo "<tr>";
            echo "<td>" . $_GET["bericht"] . "</td>";
        echo "</tr>";
    echo "</table>";
?>

<?php
    //Footer includen
    include "../../Includes/footer.php";
?>
