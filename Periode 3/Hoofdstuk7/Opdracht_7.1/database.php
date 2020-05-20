<?php
// Open de database connectie en ODBC driver
try
{
    //Verbinding maken met de database
    $pdo = new PDO("odbc:odbc2sqlserver");

    //Database tabel joke data invoeren binnen PHP
    //$addInfo = $pdo->exec("INSERT INTO joke VALUES('grap', 'clou', '2020/5/20')");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    //Wordt de code gestopt
    die();
}
echo "database connectie gelukt";

//Try en catch gebruik je om code te checken dat het werkt
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
//Als wat in de try niet lukt (loopt vast, kapot, verkeerd gelinkt) dan wordt de catch uitgevoerd
//PDOExcepption zit specifieke foutmeldingen in
//$e komy een melding in
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
// Tonen van de inhoud van aJokes
echo "<pre>";
//var_dump geeft alles de type weer. print_r geeft alleen de output weer GEEN type
    //var_dump($aJokes);
echo "</pre>";

/*foreach($aJokes as $grap) {
    echo $grap['id'] . " ";
    echo $grap['joketext'] . " ";
    echo $grap['jokeclou'] . "<br>";

    //Alleen de grappen laten zien die in het voorbeeldprogramma staan
    //(Database id's resetten)
    /*if($grap['id'] == 16 || $grap['id'] == 17 || $grap['id'] == 18)
    {
        echo $grap['joketext'] . " ";
        echo $grap['jokeclou'] . "<br>";
    }
}*/

//echo $grap['joketext'];
?>