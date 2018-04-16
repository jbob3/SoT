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
        <div id="form" class="form4">
        <form action='/arm.php' class="form4" method="get">
            Action:<br> 
            <input type="submit" value="arm" name="status">ARM</button><br>
            <input type="submit" value="disarm" name="status">DISMARM</button><br>
            <input type="submit" value="on" name="status">ON</button><br>
            <input type="submit" value="off" name="status">OFF</button>
        </form>
        <hr>
        </div>
        <div id='newIP' class='form2'>
        Now sensor status is now:
        
        <input type="text" name="status" value="<?php echo htmlspecialchars($_GET["status"]);?>"><br><br>
        </div>

    
<?php
    include 'bin/arming.php';

    arming($_GET['status']);
    

?>
 
