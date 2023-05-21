<?php
require '../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class HomeSaveLoadCSVTest extends TestCase
{
    public function testHomeSaveLoadCSV()
    {
        $klient = new Client(['base_uri' => 'http://localhost']);
        $homePage = $klient->request('GET', '/App/templates/homePage.php');
        
        $this->assertStringContainsString('<form method="post" action="../services/csvSaver.php">', $homePage->getBody());
        $this->assertStringContainsString('<button type="submit" class="btn btn-tertiary btn-lg btn-block">Zapisz do pliku CSV</button>', $homePage->getBody());
        
        $DOM = new DOMDocument();
        $DOM->loadHTML($homePage->getBody());
        $formularz = $DOM->getElementsByTagName('form')->item(0);
        $pola = $formularz->getElementsByTagName('input');
        
        $polaWyslane = [];
        foreach ($pola as $pole)
        {
            $name = $pole->getAttribute('name');
            $value = $pole->getAttribute('value');
            $polaWyslane[$name] = $value;
        }
        
        $homePage = $klient->request('POST', '/App/services/csvSaver.php', ['form_params' => $polaWyslane]);
        
        $this->assertFileExists('../media/plan.csv');
        include '../services/csvReader.php';
        $this->assertCount(6, $naglowki);
        $this->assertNotEmpty($lekcje);
        $this->assertNotEmpty($godziny);
    }
}
?>