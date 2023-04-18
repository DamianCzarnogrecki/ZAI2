<?php
    include 'deserializer.php';
    file_put_contents('../media/plan.json', json_encode(array('naglowki' => $naglowki, 'lekcje' => $lekcje, 'godziny' => $godziny)));
?>