<?php
    //Modelleren = Gijsbrechts
    //Digitale vaardigheden = Pielage
    //Computertekenen = Van den Berg
    //Database / SQL = Van de Wetering
    //Hardware AO = Saebu
    //HTML/CSS = Evers
    //Javascript = Van de Wetering
    //ASP = Van Meer
    //Usability = Van de Wetering
    //PHP = Evers

    //Nederlands = Bos
    //Engels = Mitrovic
    //Rekenen = Van Meer
    //Loopbaan en Burgershap = De Ruiter

    //Variabel declareren en initialiseren
    $courseName = "PHP";
    $teacherName = "";

    //Switch
    switch($courseName)
    {
        case "Modelleren":
            $teacherName = "Gijsbrechts";
            break;
        case "Digitale vaardigheden":
            $teacherName = "Pielage";
            break;
        case "Computertekenen":
            $teacherName = "Van den Berg";
            break;
        case "Database / SQL":
            $teacherName = "Van de Wetering";
            break;
        case "Hardware AO":
            $teacherName = "Saebu";
            break;
        case "HTML/CSS":
            $teacherName = "Evers";
            break;
        case "Javascript":
            $teacherName = "Van de Wetering";
            break;
        case "ASP":
            $teacherName = "Van Meer";
            break;
        case "Usability":
            $teacherName = "Van de Wetering";
            break;
        case "PHP":
            $teacherName = "Evers";
            break;
        case "Nederlands":
            $teacherName = "Bos";
            break;
        case "Engels":
            $teacherName = "Mitrovic";
            break;
        case "Rekenen":
            $teacherName = "Van Meer";
            break;
        case "Loopbaan en Burgerschap":
            $teacherName = "De Ruiter";
            break;
    }
    //Taak 3 zin echo'n
    echo "<p id='vaknaamEnLeraar'>Voor het vak <span>" . $courseName . "</span> heb  ik <span>" . $teacherName . "</span> als docent.</p>";
?>