<?php

$genere = empty($_GET['genre']) ? 'all' : strtolower($_GET['genre']) ;

include __DIR__ . '/db/data.php';

if ($genere == 'all') {
    $arr_filtered = $arr_album;
}else{
    $arr_filtered = array_filter($arr_album, function ($disc) use ($genere) {
        var_dump($disc);
        return strtolower($disc['genre']) == $genere ;
    });
}

header('Content-Type: application/json');

echo json_encode($arr_album);