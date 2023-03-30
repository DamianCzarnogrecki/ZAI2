<?php
require('Smarty.class.php');
$smarty = new Smarty;
$smarty -> template_dir = 'c:/xampp/htdocs/App/templates';
$smarty -> cache_dir = "c:/xampp/smarty/cache";
$smarty -> compile_dir = "c:/xampp/smarty/templates_c";

$naglowki = array("Godziny", "PN", "WT", "ŚR", "Lekcja", "CZ", "PT");
$lekcje = array(
    array("TAI g2", "PG g2", "AI gp", "TiDA", "wolne", "WI g2", "AI g1", "AI g1", ""),
    array("TAI g1", "TAI g1", "LW", "PG gp", "TAI g2", "TAI gi", "AI gp", "PG g2", ""),
    array("TiDA", "CMS", "WI g2", "PG gp", "PLSKIA g1", "TiDA", "wolne", "CMS", "konsultacje"),
    array("1", "2", "3", "4", "5", "6", "7", "8", "9"),
    array("wolne", "AMiD", "AMiD", "AD", "AD", "AD", "TiDA", "wolne", ""),
    array("AD", "AD", "TAI gi", "TAI g2", "TAI gi", "ZAW", "ZAW", "wolne", "")
);
$godziny = array("7:50-8:35", "8:40-9:25", "9:35-10:20", "10:25-11:10", "11:25-12:10", "12:15-13:00", "13:05-13:50", "14:00-14:45", "14:50-15:35");

$smarty->assign('naglowki', $naglowki);
$smarty->assign('lekcje', $lekcje);
$smarty->assign('godziny', $godziny);

$smarty->display('homePage.tpl');
?>