<?php
use PHPUnit\Framework\TestCase;

class AccessLinkTest extends TestCase
{
    public function testAccessLink()
    {
        ob_start();
        include '../templates/mailing/accessLink.tpl';
        $wynik = ob_get_clean();

        $imie = $this->znajdz($wynik, "imie");
        $nazwisko = $this->znajdz($wynik, "nazwisko");

        $this->assertNotEmpty($imie);
        $this->assertNotEmpty($nazwisko);
    }

    private function znajdz($html, $id)
    {
        $dokument = new DOMDocument();
        $dokument->loadHTML($html);
        $element = $dokument->getElementById($id);

        if ($element) return $element->nodeValue;
        else return null;
    }
}
?>