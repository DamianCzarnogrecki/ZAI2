<?php
    $xml = simplexml_load_file('../media/plan.xml');

    $naglowki = array();
    $lekcje = array();
    $godziny = array();

    foreach ($xml->naglowki->naglowek as $naglowek)
    {
        $naglowki[] = (string)$naglowek;
    }

    foreach ($xml->lekcje->lekcja as $lekcja) 
    {
        $pojedynczaLekcja = array();
        foreach ($lekcja->wartosc as $wartosc)
        {
            $pojedynczaLekcja[] = (string)$wartosc;
        }
        $lekcje[] = $pojedynczaLekcja;
    }

    foreach ($xml->godziny->godzina as $godzina)
    {
        $godziny[] = (string)$godzina;
    }
?>