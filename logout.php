<?php

include_once 'login.php';

unset($_SESSION['username']);
unset($_SESSION['id']);
session_destroy($_SESSION);


?>
<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SoT control</title>
        <link rel="stylesheet" href="index.css" />
        
    </head>

    <body>
        <?php
     
        include_once($_SERVER['DOCUMENT_ROOT'] . '/nav.php');

        echo "<div id='title' class='title'>";
        echo "<h1>You are now logged out.</h1><br><br>";
        echo "</div>";

        
        ?>
        
    </body>
    </html>