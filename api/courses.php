<?php
require '../connection.php';

$kwerenda = "SELECT id, nick, email, czas_rejestracji, ranga, url_zdjecia_profilowego FROM gracz";
$wynik = $polaczenie->query($kwerenda);

if ($wynik)
{
    $dane = $wynik->fetch_all(MYSQLI_ASSOC);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dane);
} 
else echo $polaczenie->error;

$polaczenie->close();
?>