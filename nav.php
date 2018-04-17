<?php
include_once 'bin/forcelogin.php'
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
    $menu = array(
            'home' => array('text'=>'Home', 'url'=>'index.php'),
            'away' => array('text'=>'SIEM Management', 'url'=>'siem.php'),
            'about' => array('text'=>'Arming', 'url'=>'arm.php'),
        );

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
</body>
</html>