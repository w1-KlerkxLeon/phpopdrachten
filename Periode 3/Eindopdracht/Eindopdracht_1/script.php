<?php
/*
 *  User:   Leon Klerkx
 *  Date:   8-4-2020
 *  Time:   15:15 uur
 *  File:   script.php
 */
?>

<?php
    //Taak 2
    //Associatieve array met username en password
    $login = array("Leon" => "Klerkx", "Siebe" => "van de Ven", "Lucas" => "Broek", "Remco" => "Evers",
                   "Rachel" => "Sarikaya", "Ricardo" => "Kerssens", "Luuk" => "Seepma",
                   "Thomas" => "Ruijters", "Teun" => "van Helvoort", "Mitchell" => "Sterrenberg");

    //Variabelen declareren voor eventuele foutmeldingen
    $message = "";
    //Laat of de loginscherm zien of het welkomstscherm van Bergheem
    $showLoginScreen = false;

    //Als username en password ingevuld is
    if(isset($_POST["username"]) && $_POST['password'])
    {
        foreach($login as $gebruikersnaam => $wachtwoord)
        {
            //Als de inputvelden gelijk zijn aan gebruikersnaam en wachtwoord
            if($_POST["username"] == $gebruikersnaam && $_POST['password'] == $wachtwoord)
            {
                //Informatie over de discotheek weergeven
                $showLoginScreen = true;
            }
        }
    }
?>

<?php
    //Als de username en password gelijk is wat in de foreach word gecheckt
    if($showLoginScreen == true)
    {
?>
        <!--Titel-->
        <h1>
            Bergheen
        </h1>
        <p>
            Welkom!
        </p>
        <!--Openingstijden-->
        <fieldset>
            <legend>Openingstijden</legend>
            <p>Do: 22:00</p>
            <p>Vr: All day</p>
            <p>Za: All day</p>
            <p>Zo: 12:00</p>
        </fieldset>
        <!--Adresgegevens-->
        <fieldset>
            <legend>Adresgegevens</legend>
            <p>Am Wreizener Bahnhof</p>
            <p>10243 Berlin</p>
            <p>Duisland</p>
        </fieldset>
        <p>
            Deze gegevens dien je ten alle tijden geheim te houden!
        </p>

<?php
    }
    else
    {
        //Als Username leeg is
        if(empty($_POST["username"]))
        {
            //Message tonen
            $message = "Username is niet ingevuld.";
        }
        //Als Password leeg is
        elseif(empty($_POST["password"]))
        {
            //Message tonen
            $message = "Wachtwoord is niet ingevuld.";
        }
        //Als Username of Password verkeerd is
        elseif($_POST["username"] != $gebruikersnaam || $_POST['password'] != $wachtwoord)
        {
            //Message tonen
            $message = "Foutieve username en / of wachtwoord";
        }
    }
?>