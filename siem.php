<?php
include_once 'bin/session.php';
include_once 'login.php';
include_once 'bin/chngSiem.php';

$v=array();

$v['ipaddr'] = $_GET["ipaddr"];

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
        $v=array();
        include 'nav.php';
       
        echo "<div id='title' class='title'>";
        echo "<h2>Enter the IP address of the SIEM: </h2>";
        echo "</div>";
        ?>
        <div id='form' class='form'>
        <form action='/bin/chngSiem.php' class='form' method='get'>
            IP:<br> 
            <input type="text" name="ipaddr" value="<?php echo htmlspecialchars($_GET["ipaddr"]);?>"><br><br>
            <input type="submit" value="Submit" size: "1em">
        </form>
        <hr>
        </div>
        <div id='newIP' class='form2'>
        Now sending logs to:
        <input type="text" name="ipaddr" value="<?php echo htmlspecialchars($_GET["ipaddr"]);?>"><br><br>
        </div>

    </body>
    </html>

