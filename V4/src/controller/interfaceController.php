<?php

class interfaceController {
    function index(){
        global $twig;
        echo $twig->render('interface.html.twig');
    }
}


