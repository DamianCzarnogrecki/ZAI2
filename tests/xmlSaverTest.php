<?php
use PHPUnit\Framework\TestCase;

class XmlSaverTest extends TestCase
{
    public function testXmlSaver()
    {
        $plik = '../media/plan.xml';
        include '../services/xmlSaver.php';

        $this->assertFileExists($plik, 'PLIK NIE ISTNIEJE');
        $this->assertNotFalse(simplexml_load_file($plik), 'NIEPRAWIDŁOWY FORMAT');
    }
}
?>