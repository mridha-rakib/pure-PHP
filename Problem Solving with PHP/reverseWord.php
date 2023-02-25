<?php
class Solution
{
    public function reverseWords(string $S): string
    {
        // Reverse the entire string
        $S = strrev($S);

        $start = 0;
        $end = 0;

        // Traverse the string
        while ($end < strlen($S)) {
            // Find the start of a word
            while ($end < strlen($S) && $S[$end] !== '.') {
                $end++;
            }

            // Reverse the word
            $sub = substr($S, $start, $end - $start);
            $sub = strrev($sub);
            $S = substr_replace($S, $sub, $start, $end - $start);

            // Move to the next word
            $start = $end + 1;
            $end = $start;
        }

        return $S;
    }
}

$t = intval(fgets(STDIN));
while ($t--) {
    $s = trim(fgets(STDIN));
    $obj = new Solution();
    echo $obj->reverseWords($s) . "\n";
}