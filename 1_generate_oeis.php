<?php
// a(n)=  ( (n+1) * n /2 ) 1
function generateOEIS($n) {
    $sequence = [];
    for ($i = 0; $i < $n; $i++) {
        $sequence[] = (($i * ($i + 1)) / 2 ) + 1;
    }
    return implode('-', $sequence);
}

?>