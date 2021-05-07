<?php


$alphabet = [
    	'a' => 1,
    	'm' => 13,
        'a' => 1,
    ];
    
    $fajar = 'muhammad fajar krisna wijaya';
    $first = $fajar[0];
    $last = $fajar[strlen($fajar)-1];
    $chars = [$first, $last];
    $total = $alphabet[$chars[0]] - $alphabet[$chars[1]];
    
    echo $total;
?>