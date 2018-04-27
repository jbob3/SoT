<?php
include_once 'login.php';
include_once 'bin/session.php';

if($_GET["ipaddr"]) {
    $newIpAddr = $_GET['ipaddr'];
    $syslogString = '*.*@' . $newIpAddr . ':514';
    file_put_contents("/50-default.conf", $syslogString);
    
}
else {
    echo "Well that didn't work";
}

?>