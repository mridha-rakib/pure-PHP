<?php

class Solution
{
    public function plaindromeCheckString(string $s): string
    {
        $str = strrev($s);

        if ($str == $s)
            return 1;
        else return 0;
    }
}


$t = intval(fgets(STDIN));
while ($t--) {

    $s = trim(fgets(STDIN));
    $obj = new Solution();
    echo $obj->plaindromeCheckString($s) . "\n";
}