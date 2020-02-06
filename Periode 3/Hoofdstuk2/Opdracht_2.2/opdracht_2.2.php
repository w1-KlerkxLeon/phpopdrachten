<?php
/*
 *  User:   Leon Klerkx
 *  Date:   5-2-2020
 *  Time:   14:45 uur
 *  File:   index.php
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
                            <a href="hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
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
            <h2>
                Uitwerkingen
            </h2>
            <!--Variabelen declareren en initialiseren-->
            <p>
                <?php
                    $text1 = "Hallo";
                    $text2 = "toch een makkelijke taal";
                    $text3 = "wat is";
                    $text4 = "PHP";
                    $text5 = "nooit gedacht dat";
                    $text6 = "de ingewikkelde installatie";
                    $text7 = "Fijn toch?"
                ?>
            </p>
            <!--Taak 2-->
            <h1>
                Taak 2
            </h1>
            <!--Taak 2 Tekst laten verschijnen-->
            <p>
                <?php
                    echo "Hallo wat is $text4 toch een makkelijke taal";
                ?>
            </p>
            <p>
                <?php
                    echo "wat is toch $text6 $text7";
                ?>
            </p>
            <p>
                <?php
                    echo "$text5 dat $text4 $text2 $text3";
                ?>
            </p>
            <!--Taak 3-->
            <h1>
                Taak 3
            </h1>
            <!--Taak 3 tekst laten verschijnen-->
            <!--<p>
                <?php
/*                    echo "Hallo, wat is $text4, ondanks de ingewikkelde installatie toch een makkelijke taal?";
                */?>
            </p>
            <p>
                <?php
/*                    echo "$text7 Nooit gedacht dat $text4 eigenlijk toch een makkelijke taal blijkt te zijn!";
                */?>
            </p>-->

            <!--Taak 3 in 1 php blok-->
            <p>
                <?php
                    echo "Hallo, wat is $text4, ondanks de ingewikkelde installatie toch een makkelijke taal?";
                    echo "<br>";
                    echo "<br>";
                    echo "$text7 Nooit gedacht dat $text4 eigenlijk toch een makkelijke taal blijkt te zijn!";
                ?>
            </p>
        </main>
    </body>
</html>
