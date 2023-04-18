<?php
    include 'deserializer.php';

    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><plan></plan>');

    $elementNaglowkow = $xml->addChild('naglowki');
    foreach ($naglowki as $naglowek)
    {
        $elementNaglowkow->addChild('naglowek', $naglowek);
    }

    $elementLekcji = $xml->addChild('lekcje');
    foreach ($lekcje as $lekcje)
    {
        $fragmentLekcji = $elementLekcji->addChild('lekcja');
        foreach ($lekcje as $wartost)
        {
            $fragmentLekcji->addChild('lekcja', $wartost);
        }
    }

    $elementGodzin = $xml->addChild('godziny');
    foreach ($godziny as $godzina)
    {
        $godzinaElement = $elementGodzin->addChild('godzina', $godzina);
    }

    $xml->asXML('../media/plan.xml');
?>