<?php

function subArraySum($arr, $n, $sum)
{
    $currentSum = $arr[0];
    $start = 0;


    for ($i = 1; $i <= $n; $i++) {

        while (
            $currentSum > $sum and
            $start < $i - 1
        ) {
            $currentSum = $currentSum -
                $arr[$start];
            $start++;
        }

        if ($currentSum == $sum) {
            echo "Sum found between indexes",
            " ", $start, " ",
            "and ", " ", $i - 1;
            return 1;
        }


        if ($i < $n)
            $currentSum = $currentSum + $arr[$i];
    }

    echo "No subarray found";
    return 0;
}


$arr = array(
    15, 2, 4, 8,
    9, 5, 10, 23
);
$n = count($arr);
$sum = 17;
subArraySum($arr, $n, $sum);
