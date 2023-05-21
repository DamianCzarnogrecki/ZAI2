<?php
use PHPUnit\Framework\TestCase;

class JsonSaverTest extends TestCase
{
    public function testJsonSaver()
    {
        $plik = '../media/plan.json';
        include '../services/jsonSaver.php';

        $this->assertFileExists($plik, 'PLIK NIE ISTNIEJE');
        
        $json = json_decode(file_get_contents($plik), true);

        $this->assertNotNull($json, 'NIEPRAWIDŁOWY FORMAT');
        $this->assertArrayHasKey('naglowki', $json, 'BRAK NAGŁÓWKÓW');
        $this->assertArrayHasKey('lekcje', $json, 'BRAK LEKCJI');
        $this->assertArrayHasKey('godziny', $json, 'BRAK GODZIN');
    }
}
?>