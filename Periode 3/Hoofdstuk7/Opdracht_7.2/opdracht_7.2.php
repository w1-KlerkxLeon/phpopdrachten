<?php
/*
 *  User:   Leon Klerkx
 *  Date:   17-5-2020
 *  Time:   16:00 uur
 *  File:   opdracht_7.2.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";

    include "../Opdracht_7.1/database.php";
?>

    <?php
        //Taak 3
        echo "<h1>Taak 3</h1>";

        //Door de array $aJokes lopen
        foreach($aJokes as $grap) {
            /*echo $grap['id'] . " ";
            echo $grap['joketext'] . " ";
            echo $grap['jokeclou'] . "<br>";*/

            //Alleen de grappen laten zien die in het voorbeeldprogramma staan
            if($grap['id'] == 16 || $grap['id'] == 17 || $grap['id'] == 18)
            {
                echo $grap['joketext'] . " ";
                echo $grap['jokeclou'] . "<br>";
            }
        }
    ?>
    <br>
    <!--Taak 4 grappen in een table plaatsen-->
    <h1>
        Taak 4
    </h1>

    <!--Table aanmaken-->
    <table>
        <!--Table headers-->
        <tr>
            <th>
                ID
            </th>
            <th>
                Joketext
            </th>
            <th>
                Jokeclue
            </th>
            <th>
                Jokedate
            </th>
        </tr>
    <?php
        foreach($aJokes as $grap)
        {
            //Als id 16, 17, 18 en 19 is
            if ($grap['id'] == 16 || $grap['id'] == 17 || $grap['id'] == 18 || $grap['id'] == 19)
            {
                //De grap laten tonen
                echo "<tr>";
                echo "<td>" . $grap['id'] . "</td>";
                echo "<td>" . $grap['joketext'] . "</td>";
                echo "<td>" . $grap['jokeclou'] . "</td>";
                echo "<td>" . $grap['jokedate'] . "</td>";
                echo "</tr>";
            }
        }
        ?>

    <!--Table afsluiten-->
    </table>

    <?php
        //Footer inladen
        include "../../Includes/footer.php";
    ?>