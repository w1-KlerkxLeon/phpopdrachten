<?php
/*
 *  User:   Leon Klerkx
 *  Date:   21-3-2020
 *  Time:   19:35 uur
 *  File:   opdracht_5.2.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";
?>

<!--Geen PHP nodig daan maak je het formulier in HTML-->

    <main>
        <!--Titel-->
        <h1>
            Uitschrijfformulier KW1C
        </h1>
        <hr>
        <!--Formulier-->
        <form action='uitschrijving.php' method='get'>
            <table>
                <!--Voor en achternaam-->
                <tr>
                    <td>
                        <label for='naam'>Voor en achternaam</label>
                    </td>
                    <td>
                        <input type='text' name='naam' id='naam' required>
                    </td>
                </tr>
                <!--Studentnummer-->
                <tr>
                    <td>
                        <label for='studentnummer'>Studentnummer</label>
                    </td>
                    <td>
                        <input type='text' name='studentnummer' id='studentnummer' required>
                    </td>
                </tr>
                <!--Datum van uitschrijving-->
                <tr>
                    <td>
                        <label for='datumUitschrijving'>Datum van uitschijving</label>
                    </td>
                    <td>
                        <input type='date' name='datumUitschrijving' id='datumUitschrijving' required>
                    </td>
                </tr>
                <!--Reden van uitschrijving-->
                <tr>
                    <td>
                        <label for='redenUitschrijving'>Reden van uitschrijving</label>
                    </td>
                    <td>
                        <select name='redenUitschrijving'>
                            <option value="Verkeerde keuze">Verkeerde keuze</option>
                            <option value="Te moeilijk">Te moeilijk</option>
                            <option value="Verandering van woonplaats">Verandering van woonplaats</option>
                            <option value="Privé omstandigheden">Privé omstandigheden</option>
                        </select>
                    </td>
                </tr>
                <!--Leerjaar-->
                <tr>
                    <td>
                        <label>Leerjaar</label>
                    </td>
                    <!--1e leerjaar-->
                    <td>
                        <input type='radio' name='leerjaar' id='1eLeerjaar' value='1<sup>e</sup> leerjaar' required>
                        <label for='1eLeerjaar'>1<sup>e</sup> leerjaar</label>
                    </td>
                </tr>
                <!--2e leerjaar-->
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type='radio' name='leerjaar' id='2eLeerjaar' value='2<sup>e</sup> leerjaar'>
                        <label for='2eLeerjaar'>2<sup>e</sup> leerjaar</label>
                    </td>
                </tr>
                <!--3e leerjaar-->
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type='radio' name='leerjaar' id='3eLeerjaar' value='3<sup>e</sup> leerjaar'>
                        <label for='3eLeerjaar'>3<sup>e</sup> leerjaar</label>
                    </td>
                </tr>
                <!--Aanmelden bij de succesklas-->
                <tr>
                    <td colspan='2'>
                        <input type='checkbox' name='aanmeldingSuccesklas' id='aanmeldingSuccesklas' value='JA'>
                        <label for='aanmeldingSuccesklas'>Ik wil me aanmelden bij de succesklas</label>
                    </td>
                </tr>
                <!--Verwijderen gegevens-->
                <tr>
                    <td colspan='2'>
                        <input type='checkbox' name='verwijderGegevens' id='verwijderGegevens' value='JA'>
                        <label for='verwijderGegevens'>Verwijder mijn gegevens uit het systeem</label>
                    </td>
                </tr>
                <!--Bericht reden uitschrijving-->
                <tr>
                    <td colspan='2'>
                        <label for='berichtUitschrijving'>Geef hieronder de reden van je uitschrijving op</label>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <textarea id='berichtUitschrijving' name='berichtUitschrijving'></textarea>
                    </td>
                </tr>

                <!--Verstuur button-->
                <tr>
                    <td colspan='2'><input type='submit' value='Versturen'>
                    </td>
                </tr>

                <!--tabel afsluiten-->
                </table>

            <!--Formulier afsluiten-->
            </form>
    </main>

<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>