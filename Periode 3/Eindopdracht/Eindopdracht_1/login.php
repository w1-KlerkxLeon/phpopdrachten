<?php
/*
 *  User:   Leon Klerkx
 *  Date:   8-4-2020
 *  Time:   14:10 uur
 *  File:   login.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";

    //Script inladen
    include "script.php";

 /*   //Als de gebruiker ingelogd is
    if(isset($_POST["submit"]))
    {
        //Script inladen
        include "script.php";
    }*/
?>

<main>
    <?php
        //Als de gebruiker NIET ingelogd is
        if($showLoginScreen == false)
        {
    ?>
    <!--Titel-->
    <h1>
        Bergheen
    </h1>
    <p>
        Login om onze adresgegevens + openingstijden te zien
    </p>
    <!--Het formulier tonen-->
   <form action="login.php" method="post">
       <table>
           <tr>
               <td>

               </td>
               <!--Eventuele foutmelding echoën-->
               <td>
                   <?php
                        if(isset($_POST["submit"]))
                        {
                            echo $message;
                        }
                   ?>
               </td>
           </tr>
           <!--Username-->
           <tr>
               <td>
                   <label for="username">Username</label>
               </td>
               <td>
                   <input type="text" name="username" id="username">
               </td>
           </tr>
           <!--Password-->
           <tr>
               <td>
                   <label for="password">Password</label>
               </td>
               <td>
                   <input type="password" name="password" id="password">
               </td>
           </tr>
           <!--Login-->
           <tr>
               <td>

               </td>
               <td>
                   <input type="submit" value="Login" name="submit">
               </td>
           </tr>
       </table>
   </form>
   <?php
   }
 ?>

<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>