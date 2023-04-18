<?php
    $naglowki = array();
    $lekcje = array();
    $godziny = array();

    if (($plik = fopen('../media/plan.csv', 'r')) != false)
    {
        while (($dane = fgetcsv($plik, 1000, ',')) != false)
        {
            if (empty($naglowki))
            {
                $naglowki = array_slice($dane, 1); //ominiecie pierwszej kolumny
            }
            else
            {
                $godziny[] = $dane[0];
                $wierszLekcji = array_slice($dane, 1);
                $lekcje[] = $wierszLekcji;
            }
        }
        fclose($plik);
    }
?>