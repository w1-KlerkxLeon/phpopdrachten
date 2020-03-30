<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName(){
    //Zorg dat je hier de juiste docentnaam met een return terug stuurt.
    if($_GET["subject"] == "js")
    {
        return "Wetering";
    }
    else if($_GET["subject"] == "php")
    {
        return "Evers";
    }

}
?>