<?php
/*
 *  User:   Leon Klerkx
 *  Date:   21-3-2020
 *  Time:   17:50 uur
 *  File:   oefening2.php
 */
?>

<?php
    //Formulier
    echo "<form action='form_data_oefening2.php' method='get'>";
        echo "<label>Docent: </label>";
        //Voor mij een test
        echo "<input type='text' name='leerling'>";
        //Opties docenten
        echo "<select name='teacherName'>";
            echo "<option value='BIJ00'>Dhr. van Bijnen</option>";
            echo "<option value='SAE00'>Dhr. Saebu</option>";
        echo "</select>";

        //Oefening 2 uitbereiden
        echo "<fieldset>";
            echo "<label>Vak:</label>";
            echo "<input name='course' type='radio' value='PHP'>PHP";
            echo "<input name='course' type='radio' value='Modelleren'>Modelleren";
        echo "</fieldset>";
        echo "<fieldset>";
            echo "<label>Wat vind je van het vak?:</label>";
            echo "<input name='isDifficult' type='checkbox' value='ja'>Moeilijk?";
            echo "<input name='isUseful' type='checkbox' value='ja'>Nuttig?";
        echo "</fieldset>";

        //Formulier verzenden
        echo "<input type='submit' name='verzend' value='verzend'>";

    echo "</form>";
?>