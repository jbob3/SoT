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
        <div id="form" class="form">
        <form action='/arm.php' class="form" method="get">
            IP:<br> 
            <input type="submit" value="arm" name="status">ARM</button><br>
            <input type="submit" value="disarm" name="status">DISMARM</button><br>
        </form>
        <hr>
        </div>
        <div id='newIP' class='form2'>
        Now sensor status is now:
        <input type="text" name="status" value="<?php echo htmlspecialchars($_GET["status"]);?>"><br><br>
        </div>

    </body>
    </html>

<?php
    include 'bin/arming.php';

    ruleToggle($_GET['status']);
    
?>