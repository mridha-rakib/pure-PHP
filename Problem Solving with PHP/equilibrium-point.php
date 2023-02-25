<?php
// PHP program to find equilibrium 
// index of an array 

function equilibrium($arr, $n)
{
    $i = 0;
    $j = 0;
    $leftsum = 0;
    $rightsum = 0;

    /* Check for indexes one by one until 
    an equilibrium index is found */
    for ($i = 0; $i < $n; ++$i) {

        /* get left sum */
        $leftsum = 0;
        for ($j = 0; $j < $i; $j++)
            $leftsum += $arr[$j];

        /* get right sum */
        $rightsum = 0;
        for ($j = $i + 1; $j < $n; $j++)
            $rightsum += $arr[$j];

        /* if leftsum and rightsum 
        are same, then we are done */
        if ($leftsum == $rightsum)
            return $i;
    }

    /* return -1 if no equilibrium
       index is found */
    return -1;
}

// Driver code 
$arr = array(-7, 1, 5, 2, -4, 3, 0);
$arr_size = sizeof($arr);
echo equilibrium($arr, $arr_size);

// This code is contributed 
// by akt_mit