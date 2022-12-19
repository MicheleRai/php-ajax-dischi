<?php
include __DIR__ . '/data.php';

$arr_genres = [];

foreach ($arr_album as $disc) {
	if (!in_array($disc['genre'], $arr_genres)) {
		$arr_genres[] = $disc['genre'];
	}
}

header('Content-Type: application/json');

echo json_encode($arr_genres);