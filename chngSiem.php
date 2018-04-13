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
        echo "<h2>Enter the IP address of the SIEM: </h2>";
        echo "</div>";
        ?>
        <div id='form' class='form'>
        <form action='/chngSiem.php' class='form'>
            IP:<br> 
            <input type="text" name="ipaddr" value="<?php echo $ipaddr;?>"><br><br>
            <input type="submit" value="Submit" size: "1em">
        </form>
        </div>
        
    </body>
    </html>