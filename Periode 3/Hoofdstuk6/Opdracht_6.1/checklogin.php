<?php
/*
 *  User:   Leon Klerkx
 *  Date:   27-4-2020
 *  Time:   11:40 uur
 *  File:   checklogin.php
 */
?>

<?php
    //Associatieve array maken
    $websiteUsers = array("Leon" => "Klerkx", "Remco" => "Evers", "Paula" => "de Ruiter");

    //Als de gebruikersnaam en wachtwoord is ingevuld
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        //Loop lapen
        foreach($websiteUsers as $username => $password)
        {
            //Als gebruikersnaam en wachtwoord gelijk is aan de key en de waarde van de array
            if($_POST["username"] == $username && $_POST["password"] == $password)
            {
                //Sessie starten
                session_start();
                $_SESSION['username'] = $_POST['username'];
                header('location: welkom.php');
                $showLogin = true;
            }
        }
    }

    if($_POST['username'] == 'Leon' && $_POST['password'] == 'Klerkx')
    {
        /*session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');*/
    }
    //Anders opdracht 6.1 inladen
    else
    {
         $message = "Ongeldige username/wachtwoord
         {$_POST['username']}, probeer het nog eens.";
        include "opdracht_6.1.php";
    }
?>
