<?php

if($_SESSION["username"] != "admin"){
    header("location: index.php");
}

?>