<?php
    require('Smarty.class.php');
    $smarty = new Smarty;
    $smarty -> template_dir = 'c:/xampp/htdocs/App/templates';
    $smarty -> cache_dir = "c:/xampp/smarty/cache";
    $smarty -> compile_dir = "c:/xampp/smarty/templates_c";

    $smarty->assign('link_rejestracji', '#');
    $smarty->assign('link_resetu_hasla', '#');

    $smarty->display('login.tpl');
?>