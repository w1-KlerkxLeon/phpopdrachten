<?php
/*
 *  User:   Leon Klerkx
 *  Date:   5-2-2020
 *  Time:   14:45 uur
 *  File:   herhaling.php
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>
        Herhaling variabelen
    </title>
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="keywords" content="">

</head>
<body>
<header>
    <!--Titel-->
    <h1>
        <?php echo "Uitwerking van PHP-opdrachten"; ?>
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
                    <a href="../hoofdstuk2/Opdracht_2.1/opdracht_2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/Opdracht_2.2/opdracht_2.2.php">Opdracht 2.2</a>
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
    <?php
        //String
        $name = "Leon";

        //Boolean
        $teacher = true;

        //Integer = hele nummers zónder komma
        $age = 19;

        //Float = nummers met een komma
        $length = 1.76;

        //toon tekst
        echo "<p>" . $name . " is " . $age . " jaar oud. </p>";
    ?>
</main>
</body>
</html>
