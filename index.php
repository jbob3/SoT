
<style>
<?php include 'CSS/index.css'; ?>
</style>
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

echo generateMenu($menu);

?>