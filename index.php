<?php
include_once 'bin/session.php';
include_once 'login.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SoT control</title>
        <link rel="stylesheet" href="index.css" />
        
    </head>

    <body>
        <?php
       include 'nav.php';
       
        echo "<div id='title' class='title'>";
        echo "<h1>Welcome to the SoT control panel!</h1><br><br>";
        echo "</div>";

        echo "<p class='body'> Click on the menu item describing what you would like to do! </p><br><br>";

        if($_SESSION["username"] == 'admin'){
            echo "<a href='register.php'>Add User</a>";
        }
        
        ?>
        
    </body>
    </html>