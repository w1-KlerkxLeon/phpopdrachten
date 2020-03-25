<?php
/*
 *  User:   Leon Klerkx
 *  Date:   21-3-2020
 *  Time:   17:50 uur
 *  File:   form_data_oefening2.php
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <style>
            /*Cellen aan elkaar*/
            table
            {
                border-collapse: collapse;
            }
            /*Tabel rand geven*/
            td
            {
                border: 1px solid #000000;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<pre>";
        //Je ziet de 'name' waar het attribuut 'name' staat met de output welke optie/waarde de gebruiker heeft ingevuld
        //Je ziet elk input element die een 'name' attribuut als output de '[name]' en de waarde die gekozen/ingevuld is
        print_r($_GET);

        //Oefening 2 netjes in tabel weergeven
        echo "<br><table class='eenvoudig'>";
            echo "<tr><td>Docent</td><td>".$_GET["teacherName"]."</td></tr>";
            echo "<tr><td>Vak</td><td>".$_GET['course']."</td></tr>";
            echo "<tr><td>Is het moeilijk</td><td>".$_GET['isDifficult']."</td></tr>";
            echo "<tr><td>Is het nuttig</td><td>".$_GET['isUseful']."</td></tr>";
        echo "</table>";

        //Je ziet alleen de naam / keuze wat je geselecteerd heb
        // echo $_GET["teacherName"];
        echo "</pre>";
        ?>
    </body>
</html>