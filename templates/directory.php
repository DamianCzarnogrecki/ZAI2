<?php
    $folder = "C:\\";
    $znalezione = scandir($folder);

    $liczbaPlikow = 0;
    $liczbaFolderow = 0;
    $rozmiar = 0;

    foreach ($znalezione as $znaleziony)
    {
        if ($znaleziony != "." || $znaleziony != "..") 
        {
            if (is_dir("$folder/$znaleziony"))
            {
                $liczbaFolderow++;
                echo "<p>$znaleziony folder - Uprawnienia: ".substr(sprintf("%o",fileperms("$folder/$znaleziony")),-4)."</p>";
            } 
            else
            {
                $liczbaPlikow++;
                $rozmiar += filesize("$folder/$znaleziony");
                echo "<p>$znaleziony - rozmiar: ".filesize("$folder/$znaleziony")." bajtów - Uprawnienia: ".substr(sprintf("%o",fileperms("$folder/$znaleziony")),-4)."</p>";
            }
        }
    }

    echo "<p>Pliki: $liczbaPlikow</p>";
    echo "<p>Foldery: $liczbaFolderow</p>";
    echo "<p>Rozmiar całkowity: $rozmiar bajtów</p>";
?>