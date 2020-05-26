<?php

// Een "leeg" $pdo variabele aanmaken
$pdo = null;

// Starten van een DB connectie
function startConnection()
{
    global $pdo;
    // Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }
}

// Uitvoeren van een query
function executeQuery($sql)
{
    global $pdo;
    // Uitvoeren van een SQl query
    try
    {
        // Query uitvoeren
        $result = $pdo->query($sql);

        return $result;
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
        exit();
    }
}

/*Code toevoegen wat in opdracht 7.4 staat*/

//Uitvoeren van een query van exec()
function executeQueryViaExec($sql)
{
    global $pdo;
    //Proberen om de INSERT INTO op de SQL Server uit te voeren
    try
    {
        //Uitvoeren van de query via exec()
        $pdo->exec($sql);

    }
    //Als dat mislukt, wordt door $e een foutmelding opgevangen
    catch (PDOException $e)
    {
        //Foutmelding laten tonen
        echo "Er is een probleem met uitvoeren via exec(): " . $e->getMessage();
        //Script stoppen met uitvoeren
        exit();
    }
}

?>