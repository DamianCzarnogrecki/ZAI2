<?php
    $plik = file_get_contents('../media/plan.json');
    $dane = json_decode($plik, true);

    $naglowki = $dane['naglowki'];
    $lekcje = $dane['lekcje'];
    $godziny = $dane['godziny'];
?>