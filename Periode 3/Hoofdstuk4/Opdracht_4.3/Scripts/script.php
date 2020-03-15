<?php
/*
 *  User:   Leon Klerkx
 *  Date:   3-3-2020
 *  Time:   20:00 uur
 *  File:   script.php
 */
?>

<!--Taak 2 1e While loop-->
<?php
//While loop opdracht 4.3
//Taak 2 1e While loop
$task2 = "Lancering in: ";

$counter = 19;
$counterString = "";
while($counter >= 0)
{
    $counterString .= $counter;
    //Getal kleiner of gelijk aan 19 en groter of gelijk aan 0 krijgt een ,
    if($counter <= 19 && $counter > 0)
    {
        $counterString = $counterString . ",";
    }
    $counter = $counter - 1;
}
?>

<!--Taak 3 1e For loop-->
<?php
//Taak 3 eerste For loop

$task3 = "Lancering in: ";
$forString = "";
for($counter1 = 19; $counter1 >= 0; $counter1 = $counter1 - 1)
{
    $forString = $forString . $counter1;
    if($counter1 <= 19 && $counter1 > 0)
    {
        $forString = $forString . ",";
    }

}
?>
<br>
<!--Taak 4 2e While loop-->
<?php
$task4 = '';
$counter2 = 1;
$whileString = "";
while($counter2 <= 6)
{
    $whileString .= "<h$counter2>Dit is de " . $counter2 . "e iteratie</h$counter2>";
    $counter2 = $counter2 + 1;
}
?>

<!--Taak 5 2e for loop-->
<?php
//Variabele declareren en initialiseren
$task5 = '';
$forTable = "";
$forTable = $forTable . "<table>";
for($forCounter = 1; $forCounter <= 10; $forCounter = $forCounter + 1)
{
    $forTable = $forTable . "<tr><td>Dit is de " . $forCounter . "e iteratie</td></tr>";
}
$forTable = $forTable . "</table>";
?>

<!--Taak 6 3e while loop-->
<?php
//Variabelen declareren en initialiseren
$task6 = "";
$whileYear = "";
//Counter
$counterYear = 2020;
$age = 20;
while($counterYear >= 2000)
{
    //In 2020 word ik 20 jaar
    if($counterYear == 2020)
    {
        $whileYear .= "<p>In " . $counterYear . " word ik " . $age . " jaar oud</p>";
    }
    //in 2000 ben ik geboren
    elseif($counterYear == 2000)
    {
        $whileYear .= "<p>In " . $counterYear . " ben ik geboren</p>";
    }
    //In 20?? was ik zo oud
    else
    {
        $whileYear = $whileYear .  "<p>In " . $counterYear . " was ik " . $age . " jaar oud</p>";
    }
    $counterYear = $counterYear - 1;
    $age = $age - 1;
}
?>


<!--Taak 7 3e for loop-->
<?php
// $forYear = "";
$task7 = "";
$age = 20;
$counterYear = 2020;
//Mag je variabelen voor 2 taken gebruiken?
for($counterYear = 2020; $counterYear >= 2000; $counterYear = $counterYear - 1)
{
    //Jaartal 2020
    if($counterYear == 2020)
    {
        $task7 = $task7 .  "<p> In " . $counterYear . " word ik " . $age . " jaar oud</p>";
    }
    //Jaartal 2018 adolecsent
    elseif($counterYear == 2018)
    {
        $task7 = $task7 .  "<p> In " . $counterYear . " was ik " . $age . " jaar oud en werd ik een adolescent</p>";
    }
    //Jaartal 2012 puber
    elseif($counterYear == 2012)
    {
        $task7 = $task7 .  "<p> In " . $counterYear . " was ik " . $age . " jaar oud en werd ik een puber</p>";
    }
    //Jaartal 2008 tiener
    elseif($counterYear == 2008)
    {
        $task7 .= "<p> In " . $counterYear . " was ik " . $age . " jaar oud en werd ik een tiener</p>";
    }
    //Jaartal 2004 kleuter
    elseif($counterYear == 2004)
    {
        $task7 .= "<p> In " . $counterYear . " was ik " . $age . " jaar oud en werd ik een kleuter</p>";
    }
    //Jaartal 2002 peuter
    elseif($counterYear == 2002)
    {
        $task7 .= "<p> In " . $counterYear . " was ik " . $age . " jaar oud en werd ik een peuter</p>";
    }
    //In 2000 ben ik geboren
    elseif($counterYear == 2000)
    {
        $task7 .= "<p> In " . $counterYear . " ben ik geboren en was ik een baby </p>";
    }
    $counterYear = $counterYear - 1;
    $age = $age - 2;
}
?>
