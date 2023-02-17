<?php
function solve() {
    $input = fgets(STDIN);
    $arr = explode(" ", $input);
    $n = intval($arr[0]);
    $m = intval($arr[1]);
    $s = rtrim(fgets(STDIN));
    $t = rtrim(fgets(STDIN));
    $fir = $sec = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($s[$i] == $s[$i - 1]) {
            $fir++;
        }
    }

    for ($i = 1; $i < $m; $i++) {
        if ($t[$i] == $t[$i - 1]) {
            $sec++;
        }
    }

    if ($fir + $sec == 0) {
        echo "YES\n";
        return;
    }

    if (($fir == 0 || $sec == 0) && max($fir, $sec) == 1) {
        if ($s[$n - 1] != $t[$m - 1]) {
            echo "YES\n";
            return;
        }
    }

    echo "NO\n";
}

$t = intval(fgets(STDIN));

while ($t > 0) {
    solve();
    $t--;
}