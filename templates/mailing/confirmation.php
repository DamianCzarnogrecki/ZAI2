<?php
    require('Smarty.class.php');
    $smarty = new Smarty;
    $smarty -> template_dir = 'c:/xampp/htdocs/App/templates';
    $smarty -> cache_dir = "c:/xampp/smarty/cache";
    $smarty -> compile_dir = "c:/xampp/smarty/templates_c";

    $smarty->assign('nazwa_wydarzenia', 'Nazwa wydarzenia');
    $smarty->assign('imie', 'Imię');
    $smarty->assign('nazwisko', 'Nazwisko');
    $smarty->assign('miejsce', 'Miejsce');
    $smarty->assign('data', 'Data');

    $smarty->display('confirmation.tpl');
?>