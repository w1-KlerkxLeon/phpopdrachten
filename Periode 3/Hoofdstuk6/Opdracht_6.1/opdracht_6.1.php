<?php
/*
 *  User:   Leon Klerkx
 *  Date:   27-4-2020
 *  Time:   11:35 uur
 *  File:   opdracht_6.1.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";
?>

<main>
    <form action="checklogin.php" method="post">
        <table>
            <!--Eventuele foutmelding tonen-->
            <tr>
                <td>

                </td>
                <td>
                    <?php
                        if(isset($_POST["submit"]))
                        {
                            //Foutmelding tonen
                            echo $message;
                        }
                    ?>
                </td>
            </tr>
            <!--Gebruikersnaam-->
            <tr>
                <td>
                    <label for="username">Username:</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <!--Wachtwoord-->
            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <!--Verstuurbutton-->
            <tr>
                <td>
                    <input type="submit" value="Verzend" name="submit">
                </td>
            </tr>
        </table>
    </form>


<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>