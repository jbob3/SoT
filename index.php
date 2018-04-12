<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SoT control</title>
        <link rel="stylesheet" href="index.css" />
        <style type="text/css">
        .navbar {
            position: absolute;
            top 2em;
            left 1em;
            width: 3em; 
        }
        </style>
    </head>

    <body>
        <?php
        $menu = array(
            'home' => array('text'=>'Home', 'url'=>'?p=home'),
            'away' => array('text'=>'Away', 'url'=>'?p=away'),
            'about' => array('text'=>'About', 'url'=>'?p=about'),
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