<?php
    include 'deserializer.php';

    $plik = fopen('../media/plan.csv', 'w');

    fputcsv($plik, $naglowki);

    //zapisywanie wierszy
    for ($i = 0; $i < count($godziny); $i++)
    {
        $row = array($godziny[$i]);
        for ($j = 0; $j < count($lekcje); $j++)
        {
            $row[] = $lekcje[$j][$i];
        }
        fputcsv($plik, $row);
    }

    fclose($plik);
?>