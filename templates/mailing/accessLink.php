<?php
    require('Smarty.class.php');
    $smarty = new Smarty;
    $smarty -> template_dir = 'c:/xampp/htdocs/App/templates';
    $smarty -> cache_dir = "c:/xampp/smarty/cache";
    $smarty -> compile_dir = "c:/xampp/smarty/templates_c";

    $smarty->assign('dostep', 'Plik');
    $smarty->assign('imie', 'Imię');
    $smarty->assign('nazwisko', 'Nazwisko');
    $smarty->assign('link', '#');

    $smarty->display('accessLink.tpl');
?>