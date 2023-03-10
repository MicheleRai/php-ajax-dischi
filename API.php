<?php

$genre = empty($_GET['genre']) ? 'all' : strtolower($_GET['genre']);

include __DIR__ . '/db/data.php';


if ($genre == 'all') {
	$arr_filtered = $arr_discs;
} else {
	$arr_filtered = array_filter($arr_discs, function ($disc) use ($genre) {
		return strtolower($disc['genre']) == $genre;
	});
}

header('Content-Type: application/json');

echo json_encode($arr_filtered);