<?php
/*
 *  User:   Leon Klerkx
 *  Date:   31-3-2020
 *  Time:   11:15 uur
 *  File:   opdracht_5.3.php
 */
?>
<?php
    //Header inladen
    include "../../Includes/header.php";

    //Menu inladen
    include "../../Includes/menu.php";
?>

<main>
    <!--Formuiler-->
    <form action="form_data_5.3.php" method="post">
        <!--Titel-->
        <h1>
            Corona enquete:
        </h1>
        <table>
            <!--Naam-->
            <tr>
                <td>
                    <label for="naam">Wat is je naam:</label>
                </td>
                <td>
                    <input type="text" name="naam" id="naam">
                </td>
            </tr>
            <!--Leeftijd-->
            <tr>
                <td>
                    <label for="leeftijd">Wat is je leeftijd:</label>
                </td>
                <td>
                    <input type="text" name="leeftijd" id="leeftijd">
                </td>
            </tr>
            <!--Gemeente-->
            <tr>
                <td>
                    <label>Gemeente:</label>
                </td>
                <td>
                    <select name="gemeente">
                        <option>Den Bosch</option>
                        <option>Heusden</option>
                        <option>Waalwijk</option>
                        <option>Tilburg</option>
                    </select>
                </td>
            </tr>
            <!--Inwoners-->
            <tr>
                <td>
                    <label for="inwoners">Aantal inwoners gemeente</label>
                </td>
                <td>
                    <input type="text" name="citizens" id="inwoners">
                </td>
            </tr>
            <!--Mensen in woonplaats besmet-->
            <tr>
                <td>
                    <label>Ken je mensen die besmet zijn in je woonplaats?</label>
                </td>
                <td>
                    <!--Radiobutton 'Ja'-->
                    <input type="radio" name="besmetInWoonplaats" id="ja" value="Ja">
                    <!--Label 'Ja'-->
                    <label for="ja">Ja</label>
                    <!--Radiobutton 'Nee'-->
                    <input type="radio" name="besmetInWoonplaats" id="nee" value="Nee">
                    <!--Label 'Nee'-->
                    <label for="nee">Nee</label>
                </td>
            </tr>
            <!--Aantal besmette mensen in je gemeente-->
            <tr>
                <td>
                    <label for="aantalZiekenhuisopnames">Aantal ziekenhuis opnames in je woonplaats/gemeente*</label>
                </td>
                <td>
                    <input type="text" name="infected" id="aantalZiekenhuisopnames">
                </td>
            </tr>
            <!--Formulier verzenden-->
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    * Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente">site RIVM</a>
                </td>
            </tr>
        </table>
    </form>

<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>