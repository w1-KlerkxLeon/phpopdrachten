<?php
/*
 *  User:   Leon Klerkx
 *  Date:   31-3-2020
 *  Time:   11:15 uur
 *  File:   form_data_5.3.php
 */
?>
<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inoladen
    include "../../Includes/menu.php";
    //Functions inladen
    include "functions.php";
?>

<?php
    //Variabelen formulier declareren
    $naam = $_POST["naam"];
    $leeftijd = $_POST["leeftijd"];
    $gemeente = $_POST["gemeente"];
    $inwoners = $_POST["citizens"];
    $besmetInWoonplaats = $_POST["besmetInWoonplaats"];
    $aantalBesmet = $_POST["infected"];
?>

<table id='form_data'>
    <tr>
        <!--Vraag-->
        <td class="faq">
            Vraag
        </td>
        <td class="faq">
            Antwoord
        </td>
    </tr>
    <!--Naam-->
    <?php
        //Als naam NIET leeg is
        if(!empty($naam))
        {
            echo "<tr>";
            echo "<td>Naam</td>";
            echo "<td> " . $naam . " </td>";
            echo "</tr>";
        }
    ?>
    <!--Leeftijd-->
    <?php
        //Als leeftijd NIET leeg is
        if(!empty($leeftijd))
        {
            echo "<tr>";
            echo "<td>Leeftijd</td>";
            echo "<td> " . $leeftijd . " </td>";
            echo "</tr>";
        }
    ?>
    <!--Gemeente-->
    <?php
        //Geselecteerde gemeente weergeven
        if(isset($gemeente))
        {
            echo "<tr>";
            echo "<td>Gemeente</td>";
            echo "<td> " . $gemeente . " </td>";
            echo "</tr>";
        }
    ?>
    <!--Inwoners-->
    <?php
        //Als inwoner NIET leeg is
        if(!empty($inwoners))
        {
            echo "<tr>";
            echo "<td>Inwoners</td>";
            echo "<td> " . $inwoners . " </td>";
            echo "</tr>";
        }
    ?>
    <!--Mensen in woonplaats besmet-->
    <?php
        //Als kennissen besmet NIET aangevinkt is
        if(isset($besmetInWoonplaats))
        {
            echo "<tr>";
            echo "<td>Kennissen besmet</td>";
            echo "<td> " . $besmetInWoonplaats . " </td>";
            echo "</tr>";
        }
    ?>
    <!--Aantal mensen besmet-->
    <?php
        if(!empty($aantalBesmet))
        {
            echo "<tr>";
            echo "<td>Aantal besmet</td>";
            echo "<td> " . $aantalBesmet . " </td>";
            echo "</tr>";
        }
    ?>
    <!--Besmet eigen netwerk-->
    <tr>
        <td>
            De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.
        </td>
        <td>

        </td>
    </tr>
    <!--Kans per ontmoeting-->
    <tr>
        <td>
            Kans per ontmoeting op besmetting
        </td>
        <?php
            echo "<td>";
            //Funtie
            echoKans();
            echo "</td>";
        ?>
    </tr>
    <!--Inschatting-->
    <tr>
        <td>
            Kans is 1 op
        </td>
        <?php
            //Inschatting

            $kans1op = getKans1op();
            $vergelijking = vergelijkOorzaken($kans1op);
            //Je kunt nu $vergelijking printen zodat het eruit ziet als het voorbeeld
            echo "<td>";
            echo $kans1op;
            echo "</td>";
        ?>
    </tr>
    <!--Uitleg kans-->
    <tr>
        <?php
            echo "<td>";
            echo $vergelijking;
            echo "</td>";
        ?>
        <td>

        </td>
    </tr>

    <!--Laatste punt-->
    <?php
        if($besmetInWoonplaats == "Ja")
        {
            echo "<tr>";
            echo "<td>De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken</td>";
            echo "<td></td>";
            echo "</tr>";
        }
    ?>
</table>

<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>