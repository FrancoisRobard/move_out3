<?php
session_start();
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>creation d'evenement</title>
        <link rel='stylesheet' href='CSSnav.css'>
        <link rel='stylesheet' href='CSSfooter.css'>
        <link rel='stylesheet' href='CSSformulaire.css'>
        <link rel='stylesheet' href='CSStestJS.css'>
        <script type="text/javascript" src="fonctionsJS.js"></script>
        <script type="text/javascript" src="test_verification_adresse_mail.js"></script>

    </head>
    <body>
        <div id="global">
        <?php
        include_once 'nav_connecte.php';
        include_once 'formulaire_creation_evenement1.php';
        ?>
        </div>
        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>

