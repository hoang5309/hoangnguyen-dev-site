<?php
    $template = intval($_POST['template']);
    $html;
    switch($template){
        case 1:
            $form = readfile('templates/form1.html');
            $email = readfile('templates/template1.html');
    }  
?>