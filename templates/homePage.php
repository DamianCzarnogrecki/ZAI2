<?php

require('Smarty.class.php');

class PlanLekcji {
    private $smarty;
    private $naglowki;
    private $lekcje;
    private $godziny;
    private $czyElektryk;
    private $czySkrocone;
    private $naglowkiSerializowane;
    private $lekcjeSerializowane;
    private $godzinySerializowane;

    public function __construct($czyElektryk,$czySkrocone)
    {
        $this->smarty = new Smarty;
        $this->smarty->template_dir = 'c:/xampp/htdocs/App/templates';
        $this->smarty->cache_dir = "c:/xampp/smarty/cache";
        $this->smarty->compile_dir = "c:/xampp/smarty/templates_c";
        
        if (empty($_POST['naglowki']) && empty($_POST['lekcje']) && empty($_POST['godziny']))
        {
            $this->naglowki = array("Godziny", "PN", "WT", "ŚR", "Lekcja", "CZ", "PT");

            if($czyElektryk)
            {
                $this->lekcje = array(
                    array("TAI g2", "PG g2", "AI gp", "TiDA", "wolne", "WI g2", "AI g1", "AI g1", ""),
                    array("TAI g1", "TAI g1", "LW", "PG gp", "TAI g2", "TAI gi", "AI gp", "PG g2", ""),
                    array("TiDA", "CMS", "WI g2", "PG gp", "PLSKIA g1", "TiDA", "wolne", "CMS", "konsultacje"),
                    array("1", "2", "3", "4", "5", "6", "7", "8", "9"),
                    array("wolne", "AMiD", "AMiD", "AD", "AD", "AD", "TiDA", "wolne", ""),
                    array("AD", "AD", "TAI gi", "TAI g2", "TAI gi", "ZAW", "ZAW", "wolne", "")
                );

                $czySkrocone ?
                $this->godziny = array("8:00-8:25", "8:30-8:55", "9:00-9:25", "9:30-9:55", "10:00-10:25", "10:30-10:55", "11:00-11:25", "11:30-11:55", "12:00-12:25") :
                $this->godziny = array("7:50-8:35", "8:40-9:25", "9:35-10:20", "10:25-11:10", "11:25-12:10", "12:15-13:00", "13:05-13:50", "14:00-14:45", "14:50-15:35");
            }
            else
            {
                $this->lekcje = array(
                    array("", "", "Aspekty bezpieczeństwa danych w.", "Aspekty bezpieczeństwa danych w.", "Programowanie aplikacji bazodanowych lab.", "Programowanie aplikacji bazodanowych lab."),
                    array("Zespołowe wytwarzanie oprogramowania w.", "Zespołowe wytwarzanie oprograowania w.", "", "", "", ""),
                    array("", "", "", "", "Zespołowe wytwarzanie oprogramowania lab.", "Zespołowe wytwarzanie oprogramowania lab."),
                    array("1", "2", "3", "4", "5", "6"),
                    array("Zaawansowane aplikacje internetowe lab.", "Zaawansowane aplikacje internetowe lab.", "Zaawansowane aplikacje internetowe w.", "Zaawansowane aplikacje internetowe w.", "", ""),
                    array("Ochrona własności intelektualnych w.", "Ochrona własności intelektualnych w.", "Programowanie aplikacji bazodanowych w.", "Programowanie aplikacji bazodanowych w.", "", "")
                );
                
                $czySkrocone ?
                $this->godziny = array("8:00-8:25", "8:30-8:55", "9:00-9:25", "9:30-9:55", "10:00-10:25", "10:30-10:55") :
                $this->godziny = array("8:30-10:00", "10:15-11:45", "12:00-13:30", "13:45-15:15", "15:30-17:00", "17:15-18:45");
            }

            $this->naglowkiSerializowane = base64_encode(serialize($this->naglowki));
            $this->lekcjeSerializowane = base64_encode(serialize($this->lekcje));
            $this->godzinySerializowane = base64_encode(serialize($this->godziny));
        }
        else
        {
            $this->naglowkiSerializowane = $_POST['naglowki'];
            $this->lekcjeSerializowane = $_POST['lekcje'];
            $this->godzinySerializowane = $_POST['godziny'];
        }
    }

    public function WyswietlPlan()
    {
        $this->smarty->assign('naglowki', $this->naglowki);
        $this->smarty->assign('lekcje', $this->lekcje);
        $this->smarty->assign('godziny', $this->godziny);
        $this->smarty->assign('naglowkiSerializowane', $this->naglowkiSerializowane);
        $this->smarty->assign('godzinySerializowane', $this->godzinySerializowane);
        $this->smarty->assign('lekcjeSerializowane', $this->lekcjeSerializowane);
        $this->smarty->display('homePage.tpl');
    }
}

$homePage = new PlanLekcji(true, false);
$homePage->WyswietlPlan();

?>