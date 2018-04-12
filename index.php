<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SoT control</title>
        <link rel="stylesheet" href="index.css" />
        <style type="text/css">
        .navbar {
            position: fixed;
            top 0;
            left 0;
            width: 4em;
            height: 100%;
            background: #42e8f4;
            border-right: 0.1em solid black;
        }
        </style>
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
                $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
            }
            $html .= "</nav>\n";
            return $html;
        }

        echo generateMenu($menu, "navbar");

        ?>
    </body>