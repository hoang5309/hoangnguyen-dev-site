<?php
    $template = intval($_POST['template']);
    $html;
    switch($template){
        case 1:
            $html = readfile('templates/template1.html');
            break;
    }
    return $html;
?>