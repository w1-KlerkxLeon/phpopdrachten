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
            <!--Taak 1: aanmaken variabelen-->
            <?php
                $evenement = "Elfstedentocht";
                $friesevenement = "Alvestêdetocht";
                $afstand = 200;
                $activiteit = "schaatstocht";
                $uitgeoefend = "natuurijs";
                $vereniging = "Koninklijke Vereniging De Friesche Elf Steden";
                $hoofdstad = "Leeuwarden";
                $provincie = "Friesland";
                $aantalVerreden = 15;
                $jaartal = 1909;
                $hoeveelPerWinter = 1;

                //Nieuw variabele $verhaal declareren en verhaal initialiseren
                $verhaal = "De $evenement (Fries: $friesevenement) is de $afstand kilometer lange $activiteit over $uitgeoefend die wordt georganiseerd door de $vereniging. $hoofdstad, de hoofdstad van $provincie, is start- en aankomstplaats. De $evenement is inmiddels $aantalVerreden maal verreden en werd voor het eerst in $jaartal gereden en wordt maximaal $hoeveelPerWinter keer per winter gehouden.";
                echo "<p>$verhaal</p>";

                //Taak 2: Gebruik concat via een andere manier
                $verhaal2 = "De " . $evenement . " (Fries: " . $friesevenement .") is een " . $afstand . " kilometer lange " . $activiteit . " over " . $uitgeoefend . " die wordt georganiseerd door de " . $vereniging . "." . $hoofdstad . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $evenement . " is inmiddels " . $aantalVerreden . " maal verreden en werd voor het eerst in " . $jaartal . " gereden en wordt maximaal " . $hoeveelPerWinter . " keer per winter gehouden.";

                //$verhaal2 echoën in een P element
                echo "<p id='verhaal2'> $verhaal2 </p>";
            ?>
        </main>
        <?php
        //Footer inladen
        include "../../Includes/footer.php";
        ?>