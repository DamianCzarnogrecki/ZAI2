<?php
use PHPUnit\Framework\TestCase;

class DirectoryTest extends TestCase
{
    public function testDirectory()
    {
        ob_start();
        include '../templates/directory.php';
        $wynik = ob_get_clean();

        $this->assertGreaterThanOrEqual(0, $liczbaPlikow, 'BRAK PLIKÓW');
        $this->assertGreaterThanOrEqual(0, $liczbaFolderow, 'BRAK FOLDERÓW');
        $this->assertGreaterThanOrEqual(0, $rozmiar, 'ZEROWY ROZMIAR PLIKÓW');
    }
}
?>