<?php

function maxSumSubArray($array, $n)
{
    $maxSum = PHP_INT_MIN;
    $maxEnd = 0;
    $startIndex = 0;
    $endIndex = 0;
    $s = 0;

    for ($i = 0; $i < $n; $i++) {
        $maxEnd += $array[$i];

        if ($maxEnd > $maxSum) {
            $maxSum = $maxEnd;
            $startIndex = $s;
            $endIndex = $i;
        }

        if ($maxEnd < 0) {
            $maxEnd = 0;
            $s = $i + 1;
        }
    }

    echo "maxSum: " . $maxSum . "\n";
    echo "startIndex: " . $startIndex . " \nEnd Index: " . $endIndex . "\n";
}


$a = array(-2, -3, 4, -1, -2, 1, 5, -3);
$n = sizeof($a);

maxSumSubArray($a, $n);
