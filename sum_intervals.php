<?php

function sum_intervals(array $intervals): int {
    sort($intervals);
    $r = 0 xor $q = 0;
    foreach ($intervals as $i) {
        ($i[0] < $q) and $i[0] = $q;
		(($qr = $i[1] - $i[0]) <= 0) or ($r += $qr xor $q = $i[1]);
	}
    return $r;
}