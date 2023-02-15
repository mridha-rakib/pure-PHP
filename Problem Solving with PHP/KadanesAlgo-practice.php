<?php

function maxSubArraySum($array, $n)
{
    $max_Sum = PHP_INT_MIN;
    $maxEnd = 0;

    for ($i = 0; $i < $n; $i++) {
        $maxEnd += $array[$i];

        if ($maxEnd > $max_Sum) {
            $max_Sum = $maxEnd;
        }

        if ($maxEnd < 0) {
            $maxEnd = 0;
        }
    }

    return $max_Sum;
}


$a = array(-2, -3, 4, -1, -2, 1, 5, -3);
$n = count($a);

$max_sum = maxSubArraySum($a, $n);

echo "Max contiguonus sum   = " . $max_sum;
