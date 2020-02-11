<?php
/*
 *  User:   Leon Klerkx
 *  Date:   5-2-2020
 *  Time:   14:45 uur
 *  File:   oefenopdracht.php
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Opdracht 2.2
        </title>
        <link href="CSS/opdracht_2.2.css" type="text/css" rel="stylesheet">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!--        <meta charset="x-UTF-16LE-BOM">-->
    </head>
    <body>
        <header>
            <!--Titel-->
            <h1>
                <?php
                    echo "Uitwerking van PHP-opdrachten";
                 ?>
            </h1>
        </header>
        <aside>
            <h2>
                Menu
            </h2>
            <!--Menu van mijn opdrachten-->
            <ul>
                <!--Hoofdstuk 2-->
                <li>
                    Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="../Opdracht_2.1/opdracht_2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="opdracht_2.2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
                <!--Hoofdstuk 3-->
                <li>
                    Hoofdstuk 3
                    <ul>
                        <li>
                            <a href="hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                        </li>
                        <li>
                            <a href="hoofdstuk3/opdracht_3-3.php">Opdracht 3.3</a>
                        </li>
                    </ul>
                </li>
                <!--Hoofdstuk 4-->
                <li>
                    Hoofdstuk 4
                    <ul>
                        <li>
                            <a href="hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                        </li>
                        <li>
                            <a href="hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                        </li>
                        <li>
                            <a href="hoofdstuk4/opdracht_4-3.php">Opdracht 4.3</a>
                        </li>
                        <li>
                            <a href="hoofdstuk4/opdracht_4-4.php">Opdracht 4.4</a>
                        </li>
                    </ul>
                </li>
                <!--Hoofdstuk 5-->
                <li>
                    Hoofdstuk 5
                </li>
                <ul>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                    </li>
                </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <!--Oude versie opdracht 2.2-->
            <h2>
                Uitwerkingen
            </h2>
            <!--Variabelen declareren en initialiseren-->
            <p>
                <?php
                    $oudtext1 = "Hallo";
                    $oudtext2 = "toch een makkelijke taal";
                    $oudtext3 = "wat is";
                    $oudtext4 = " PHP ";
                    $oudtext5 = "nooit gedacht dat";
                    $oudtext6 = "de ingewikkelde installatie";
                    $oudtext7 = " Fijn toch? "
                ?>
            </p>
            <!--Taak 2-->
            <h1>
                Taak 2
            </h1>
            <!--Taak 2 Tekst laten verschijnen-->
            <p>
                <?php
                    echo "Hallo wat is " . $oudtext4 . " toch een makkelijke taal";
                ?>
            </p>
            <p>
                <?php
                    echo "wat is toch " . $oudtext6 .  $oudtext7;
                ?>
            </p>
            <p>
                <?php
                    echo $oudtext5 . $oudtext4 . $oudtext2 . " is";
                ?>
            </p>
            <!--Taak 3-->
            <h1>
                Taak 3
            </h1>
            <!--Taak 3 in 1 php blok-->
            <p>
                <?php
                    echo "Hallo, wat is" . $oudtext4 . ", ondanks de ingewikkelde installatie toch een makkelijke taal?";
                    echo "<br>";
                    echo "<br>";
                    echo $oudtext7 . "Nooit gedacht dat " . $oudtext4 . "eigenlijk toch een makkelijke taal blijkt te zijn!";
                ?>
            </p>
        </main>
        <!--Nieuwe versie opdracht 2.2-->
        <h1>
            Nieuwe versie van opdracht 2.2
        </h1>
        <!--Taak 1 aanmaken variabelen-->
        <p>
            <?php
                $text1 = "Hallo";
                $text2 = "een makkelijke taal";
                $text3 = "toch zo'n makkelijke taal";
                $text4 = " wat is";
                $text5 = " PHP ";
                $text6 = "Nooit gedacht dat";
                $text7 = "De installatie is best ingewikkeld";
                $text8 = "Fijn";
                $text9 = "?";
                $text10 = ".";
                $text11 = ",";
                $text12 = "<br>";
                $text13 = " is";
                $text14 = " Vind je niet";
            ?>
        </p>
        <!--Taak 2 tekst laten verschijnen-->
            <!-- een . is een koppelteken-->
            <?php
                echo "<p>". $text1 . $text11 . $text4 . $text5 . $text3 . $text10 . $text12 . "<p>" .
                "<p>" . $text7 . $text10 . $text8 . " toch" . $text9 . $text12 . "</p>" .
                "<p>" . $text6 . $text5 . $text3 . $text13 . $text10 . $text12 . "</p>";
            ?>
            <!--Taak 3 tekst laten verschijnen, met extra karakters-->
            <?php
                echo "<p>" . $text1 . $text11 . $text12  .
                $text8 . " toch dat" . $text5 . "zo'n makkelijke taal is" . $text10 . $text12 .
                $text7 . $text10 . $text14 . $text9 . "</p>";
            ?>
    </body>
</html>
