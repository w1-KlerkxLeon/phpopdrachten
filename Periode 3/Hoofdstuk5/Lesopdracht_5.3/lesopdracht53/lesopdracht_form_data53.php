<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.

    require "lesopdracht_functions53.php";
?>
<table>
    <tr>
<!--        <td>Voornaam</td>-->
<!--        <td>*Toon hier de ingevulde naam*</td>-->
        <td><?php  //print_r($_GET);
            if(!empty($_GET["firstname"]))
            {
                echo "Voornaam";
                echo "<td>" . $_GET["firstname"] . "</td>";
            }
            ?></td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <?php
            if(!empty($_GET["tussenvoegsel"]))
            {
                echo "<td>Tussenvoegsel</td>";
                echo "<td>" . $_GET["tussenvoegsel"] . "</td>";
            }
        ?>
<!--        <td>*Toon hier tussenvoegsel als deze bestaat *</td>-->
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <?php
            if(!empty($_GET["lastname"]))
            {
                echo "<td>Achternaam</td>";
                echo "<td> " . $_GET["lastname"] . "</td>";
            }
        ?>
<!--        <td>Achternaam</td>-->
<!--        <td>*Toon hier de ingevulde achternaam*</td>-->
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>*Laad hier de functie die de naam van de juiste docent toont*</td>
        <?php
            echo subject();
        ?>
    </tr>
</table>