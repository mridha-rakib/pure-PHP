<?php
//user Define function

function minimumJumps(&$arr, $n)
{
    if ($n <= 1)
        return 0;

    if ($arr[0] == 0)
        return -1;

    $maxReach = $arr[0];

    $step = $arr[0];

    $jump = 1;

    for ($i = 1; $i < $n; $i++) {
        if ($i == $n - 1) {
            return $jump;
        }

        $maxReach = max($maxReach, $i + $arr[$i]);
        $step--;

        if ($step == 0) {
            $jump++;

            if ($i >= $maxReach)
                return -1;

            $step = $maxReach - $i;
        }
    }
}

$arr = array(1, 3, 5, 8, 9, 2, 6, 7, 6, 8, 9);
$size = sizeof($arr);

echo "Minimum number of jumps to reach end is "
    . minimumJumps($arr, $size);
return 0;