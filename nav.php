<?php
include_once 'bin/forcelogin.php';
include_once 'bin/session.php';

    if($_SESSION['username'] == 'admin'){
        $menu = array(
                'home' => array('text'=>'Home', 'url'=>'index.php'),
                'siem' => array('text'=>'SIEM Management', 'url'=>'siem.php'),
                'arming' => array('text'=>'Arming', 'url'=>'arm.php'),
                'addUser' => array('text'=>'Add User', 'url'=>'register.php'),
                'logout' => array('text'=>'Logout', 'url'=>'logout.php')
            );
    }
    else{
        $menu = array(
            'home' => array('text'=>'Home', 'url'=>'index.php'),
            'siem' => array('text'=>'SIEM Management', 'url'=>'siem.php'),
            'arming' => array('text'=>'Arming', 'url'=>'arm.php'),
            'logout' => array('text'=>'Logout', 'url'=>'logout.php')
        );

    }
        function generateMenu($items, $class) {
            $html = "<nav class='$class'>\n";
            foreach($items as $item) {
                $html .= "<br><a href='{$item['url']}'>{$item['text']}</a><br><br><br></div>\n";
            }
            $html .= "</nav>\n";
            return $html;
        }
        echo generateMenu($menu, "navbar");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SoT control</title>
        <link rel="stylesheet" href="index.css" />
        
    </head>
<body>
</body>
</html>