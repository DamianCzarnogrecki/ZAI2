<?php
use PHPUnit\Framework\TestCase;

class CsvSaverTest extends TestCase
{
    public function testCsvSaver()
    {
        $naglowki = ['N1', 'N2'];
        $lekcje = [['L1', 'L2'], ['L3', 'L4']];
        $godziny = ['1:00', '2:00'];

        $_POST['naglowki'] = base64_encode(serialize($naglowki));
        $_POST['lekcje'] = base64_encode(serialize($lekcje));
        $_POST['godziny'] = base64_encode(serialize($godziny));

        include '../services/deserializer.php';
        include '../services/csvSaver.php';

        $this->assertFileExists('../media/plan.csv');
        $zTablic = "N1,N2\n1:00,L1,L3\n2:00,L2,L4\n";
        $zPliku = file_get_contents('../media/plan.csv');
        $this->assertEquals($zTablic, $zPliku);
    }
}
?>