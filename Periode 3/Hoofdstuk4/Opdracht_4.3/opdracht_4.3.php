<?php
/*
 *  User:   Leon Klerkx
 *  Date:   3-3-2020
 *  Time:   20:00 uur
 *  File:   opdracht_4.3.php
 */

    //Header en menu include
    include "../../Includes/header.php";
    include "../../Includes/menu.php";
?>

<main id="wrapper">
    <!--Titel-->
    <h2>
        Uitwerkingen
    </h2>
    <!--Taak 2 1e While loop-->
    <h3>
        1<sup>e</sup> While loop
    </h3>
    <?php
        include "Scripts/script.php";
        //Alles in script.php omzetten
        echo $task2;
        echo $counterString;
    ?>
    <!--Taak 3 1e For loop-->
    <h3>
        1<sup>e</sup> For loop
    </h3>
    <?php
        //Lancering in: tonen
        echo $task3;
        //For loop laten zien
        echo $forString;
    ?>
    <!--Taak 4 2e While loop-->
    <h3>
        2<sup>e</sup> While loop
    </h3>
    <?php
        //<h1> t/m <h6> tonen
        echo $whileString;
    ?>
    <!--Taak 5 2e For loop-->
    <h3>
        2<sup>e</sup> For loop
    </h3>
    <?php
        echo $forTable;
    ?>
    <!--Taak 6 3e While loop-->
    <h3>
        3<sup>e</sup> While loop
    </h3>
    <?php
        //Taak 6 3e while loop
        echo $whileYear;
    ?>
    <!--Taak 7 3e For loop-->
    <h3>
        3<sup>e</sup> For loop
    </h3>
    <?php
        //Taak 7 3e for loop
        echo $task7;
    ?>
</main>
<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>