<?php
use PHPUnit\Framework\TestCase;

class HomePageTest extends TestCase
{
    public function testHomePage()
    {
        $tresc = file_get_contents('http://localhost/App/templates/homePage.php');

        $dokument = new DOMDocument();
        @$dokument->loadHTML($tresc);

        $tabela = $dokument->getElementsByTagName('table')->item(0);
        $wiersze = $tabela->getElementsByTagName('tr');
        $kolumny = $wiersze->item(0)->getElementsByTagName('th');

        $this->assertGreaterThan(0, $wiersze->length, 'BRAK WIERSZY');
        $this->assertEquals(7, $kolumny->length, 'BRAK KOLUMN');
    }
}
?>