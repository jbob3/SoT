<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SoT control</title>
        <link rel="stylesheet" href="index.css" />
        <style type="text/css">
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 8em;
            height: 100%;
            background: #42e8f4;
            border-right: 0.1em solid black;
        }
        .title {
            top: 10em;
            position: fixed;
            margin: auto;
            width: 40%;
            padding: 10px;
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
                $html .= "<a href='{$item['url']}'>{$item['text']}</a><br>\n";
            }
            $html .= "</nav>\n";
            return $html;
        }

        echo generateMenu($menu, "navbar");
        
        echo "<div id='title' class='title'>";
        echo "<h1>Welcome to the SoT control panel!</h1>";

        
        ?>
        
    </body>
    </html>