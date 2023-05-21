<?php
$adresAPI = 'http://localhost/App/api/courses.php';
$daneJSON = file_get_contents($adresAPI);

if ($daneJSON != false) {
    $dane = JSON_decode($daneJSON, true);
    if ($dane != null) {
        $gracze = array();
        foreach ($dane as $dana) {
            $gracz = new stdClass();
            $gracz->id = $dana['id'];
            $gracz->nick = $dana['nick'];
            $gracz->email = $dana['email'];
            $gracz->czas_rejestracji = $dana['czas_rejestracji'];
            $gracz->ranga = $dana['ranga'];
            $gracz->url_zdjecia_profilowego = $dana['url_zdjecia_profilowego'];
            $gracze[] = $gracz;
        }
        echo '<head> <link href="../libs/Bootstrap/bootstrap.min.css" rel="stylesheet"> </head>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nick</th>
                    <th>Email</th>
                    <th>Czas Rejestracji</th>
                    <th>Ranga</th>
                    <th>Zdjęcie Profilowe</th>
                </tr>
              </thead>
            <tbody>';
        foreach ($gracze as $gracz) {
            echo '<tr>';
            echo '<td>' . $gracz->id . '</td>';
            echo '<td><strong><i>' . $gracz->nick . '</i></strong></td>';
            echo '<td>' . $gracz->email . '</td>';
            echo '<td>' . $gracz->czas_rejestracji . '</td>';
            echo '<td> <img src="../media/img/ranks/' . $gracz->ranga . '.png" width="64px" height="64px"/></td>';
            if($gracz->url_zdjecia_profilowego != null)
            echo '<td> <img src="' . $gracz->url_zdjecia_profilowego . '" width="128px" height="128px"/></td>';
            else echo '<td> <img src="../media/img/placeholder.jpg" width="128px" height="128px"/></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
    else echo "BŁĄD DEKODOWANIA DANYCH";
}
else echo "BŁĄD ZWRÓCENIA DANYCH Z API";
?>