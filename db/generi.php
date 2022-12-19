<?php

$arr_generi = [];

foreach ($arr_album as $disc) {
    if (in_array($disc['genre'], $arr_generi)) {
        $arr_generi[] = $disc['genre'];
    }
}