<?php
    //Header en menu includen
    include "../../Includes/header.php";
    include "../../Includes/menu.php";
?>

<?php
//Tabel maken
$tableIn = "<table>";
//Teller 0
$rek = 0;
//Teller kleiner dan 8
while($rek < 8)  //Of <= 7
{
    //Variabel decl.        dd-mm-YYYY met 1 dag ophogen
    $date3 = strtotime("+$rek day");
    //"w" is nummer  $date3 is waarvan optellen         $date3 is waarvan tellen (alleen getallen)
    echo "<tr><td>Day " . date("w", $date3) . " is " . date( "l d-m-y", $date3) . ".</td></tr><br>";

    $rek++;

    //l is dag uitgeschreven (maandag, dinsdag, etc)
    //d is dagnummer (01, 09, 15, 28)
    //m is maandnummer (01, 05, 10, 12)
    //y is jaarnummer met 2 cijfers (19, 20, 21)
    //Y is volledige jaarnummer met 4 cijfers (2019, 2020, 2021)
}
$tableOut = "</table>";
?>
<!--DEZE IS WEL GOED -->
<?php
//Dagnamen in een array zetten
// $dagNamen = array("zondag", "maandag" ,"dinsdag" ,"woensdag", "donderdag",
//   "vrijdag", "zaterdag", "woensdag");

echo "<h1>Taak 2 Weekkalender komende week</h1>";
$tabel = "<table>";
//For loop
for ($tel = 0; $tel <8 ; $tel++)
{
    /* $datumAlsGetal = strtotime("+$tel days");
    // echo "<br>";
     echo date('l d-m-Y', $datumAlsGetal);
     echo " en dit is dagnummer ";
     echo date('w', $datumAlsGetal);
     echo " in deze week";
    //echo "<br> dagnummer $dagnummer is een ".$dagNamen[$dagnummer] . "<br>"; */

    //Variabel aanmaken met daarin de dagen optellen (dag 0, dag 1, etc).
    $datumAlsGetal = strtotime("+$tel days");
    //Echoën        //'w' = 1, 2, 3,                                    //datum zichtbaar l = dagnaam
     $tabel .= "<tr><td>Dag " . date('w', $datumAlsGetal) . " is " . date("l d-m-Y", $datumAlsGetal) . "</td></tr>";
}               //Dag
$tabel = $tabel . "</table>";

echo $tabel;
echo "<hr>";
?>


<?php
echo "<h1>Taak 3 in if/else</h1>";
    //Taak 2
    for($teller = 0; $teller <=7; $teller = $teller + 1)
    {
        //Variabel declareren die +1 dag doe
        $datumPlus1 = strtotime("+" . $teller . "day");
        $overmorgen = "If/Else-";
        //Als teller 7 is dan 0 tonen
        if($teller == 0)
        {
            echo "If/Else is " . date("l d-m-Y", $datumPlus1) . "<br>";
        }
        else if($teller == 1)
        {
            echo "If/Else is " . date("l d-m-Y", $datumPlus1) . "<br>";
        }
        else if($teller == 2)
        {
            echo $overmorgen . "Morgen is " . date("l d-m-Y", $datumPlus1) . "<br>";
        }
        else if($teller == 3)
        {
            echo $overmorgen . $overmorgen . "Morgen is " . date("l d-m-Y", $datumPlus1) . "<br>";
        }
        else if($teller == 4)
        {
            echo $overmorgen . $overmorgen . $overmorgen . "Morgen is " . date("l d-m-Y", $datumPlus1) . "<br>";
        }
        else if($teller == 5)
        {
            echo $overmorgen . $overmorgen . $overmorgen . $overmorgen . "Morgen is " . date("l d-m-Y", $datumPlus1) . "<br>";
        }
        else if($teller == 6)
        {
            echo $overmorgen . $overmorgen . $overmorgen . $overmorgen . $overmorgen . "Morgen is " . date("l d-m-Y", $datumPlus1) . "<br>";
        }
    }

//TESTESTESTESTESTESTESTEST

//Tijdzone instellen
date_default_timezone_set("Europe/Amsterdam");

echo "<h1>Dag 7 in een if</h1>";

echo "<br>";

for($teller = 0; $teller <=7; $teller = $teller + 1)
{
    //Variabel declareren die +1 dag doe
    $datumPlus1 = strtotime("+" . $teller . "day");
    //Als teller 7 is dan 0 tonen
    if($teller == 7)
    {
        echo "Day 0 is " . date("l d-m-Y", $datumPlus1) . "<br>";
    }
    //De rest steeds +1 optellen
    else
    {
        echo "Day " . $teller . " is " . date("l d-m-Y", $datumPlus1) . "<br>";
    }
}
echo "<hr>";
?>

<!--Goede taak 3-->
<?php
    //Tijdzone instellen
    date_default_timezone_set("Europe/Amsterdam");

    echo "<h1>Goede Taak 3</h1>";
    //Array
    $dagen = ["Vandaag", "Morgen", "Over-Morgen", "Over-Over-Morgen","Over-Over-Over-Morgen",
              "Over-Over-Over-Over-Morgen","Over-Over-Over-Over-Over-Morgen"];
    //For loop      //6? week heeft 7 dagen
    for($day = 0; $day <= 6; $day = $day + 1)
    {
        //Variabel aanmaken die dagen van de for($day) +1 optelt
        $daten = strtotime("+ $day days");
//Datum uit array $day is volgende uit array    //dag-maand-jaar weergeven wat in variabel $daten staat
        echo $dagen[$day] . " is " . date("l d-m-Y", $daten) . ".<br>";
    }
?>


<?php
//Footer includen
include "../../Includes/footer.php";
?>